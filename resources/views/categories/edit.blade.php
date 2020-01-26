@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Category</div>

                <div class="card-body">
                  <form action="{{ route('categories.update',['category' => $category->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                      <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success">Update</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
