@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Business Directory

                  @auth
                    <a href="{{ route('listings.create') }}" class="btn btn-primary float-right">Add New Listing</a>
                  @else
                    <div class="float-right">
                        <form action="/search" method="get">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control">
                                <span class="input-group-prepend">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>   
                  @endauth
                </div>

                <div class="card-body">
                    <table class="table table-stripped">
                      <thead>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Website</th>
                        <th>Address</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>
                        @foreach ($listings as $listing)
                          <tr>
                            <td>
                              {{ $listing->name }}
                            </td>
                            <td>
                              {{ $listing->description }}
                            </td>
                            <td>
                              {{ $listing->email }}
                            </td>
                            <td>
                              {{ $listing->phone }}
                            </td>
                            <td>
                              {{ $listing->website }}
                            </td>
                            <td>
                              {{ $listing->address }}
                            </td>
                            @auth
                              <td>
                                <a href="{{ route('listings.edit', ['listing' => $listing->id]) }}" class="btn btn-primary">Edit</a>
                                
                                <form action="{{ route('listings.destroy', ['listing' => $listing->id]) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}

                                  <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                              
                              </td>
                            @else
                                <td>
                                  <a href="{{ route('listings.show', ['listing' => $listing->id]) }}" class="btn btn-primary">Show</a>
                                </td>
                            @endauth
                            
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
