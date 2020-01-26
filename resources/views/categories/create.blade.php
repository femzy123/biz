@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>

                <div class="card-body">
                  <form action="{{ route('categories.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <input type="text" name="name" class="form-control">
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
