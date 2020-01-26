@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Business Listing</div>

                <div class="card-body">
                  <form action="{{ route('listings.update', ['listing' => $listing->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                      <input type="text" name="name" class="form-control" value="{{ $listing->name}}">
                    </div>

                    <div class="form-group">
                      <textarea name="description" class="form-control">{{ $listing->description }}</textarea>
                    </div>

                    <div class="form-group">
                    <input type="email" name="email" class="form-control" value="{{ $listing->email}}">
                    </div>

                    <div class="form-group">
                      <input type="text" name="phone" class="form-control" value="{{ $listing->phone}}">
                    </div>

                    <div class="form-group">
                      <input type="text" name="website" class="form-control" value="{{ $listing->website}}">
                    </div>

                    <div class="form-group">
                      <input type="text" name="address" class="form-control" value="{{ $listing->address}}">
                    </div>

                    <div class="form-group">
                      <select name="category_id" class="form-control" value="{{ $listing->category_id}}">
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
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
