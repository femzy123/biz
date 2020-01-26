@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Business Directory
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
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Website</th>
                        <th>Address</th>
                      </thead>
                      <tbody>
                        @foreach ($listings as $listing)
                          <tr>
                            <td>
                            <a href="listings/{{ $listing->id }}">{{ $listing->name }}</a> 
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
