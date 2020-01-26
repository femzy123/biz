@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Business Listing</div>

                <div class="card-body">
                  <form action="{{ route('listings.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Business Name">
                    </div>

                    <div class="form-group">
                      <textarea name="description" class="form-control" placeholder="Business Description"></textarea>
                    </div>

                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Business Email">
                    </div>

                    <div class="form-group">
                      <input type="text" name="phone" class="form-control" placeholder="Business Phone">
                    </div>

                    <div class="form-group">
                      <input type="text" name="website" class="form-control" placeholder="Business Website">
                    </div>

                    <div class="form-group">
                      <input type="text" name="address" class="form-control" placeholder="Business Address">
                    </div>

                    <div class="form-group">
                      <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success">Save</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
