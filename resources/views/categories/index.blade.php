@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    <table class="table table-stripped">
                      <thead>
                        <th>Name</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>
                        @foreach ($categories as $category)
                          <tr>
                            <td>
                              {{ $category->name }}
                            </td>
                            <td>
                              <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-primary">Edit</a>
                              
                              <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                            
                            </td>
                          </tr>   
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
