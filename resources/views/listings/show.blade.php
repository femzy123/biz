@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Business Directory</div>

                <div class="card-body">
                    <ul>
                      <li>Name: {{ $listing->name }}</li>
                      <li>Description: {{ $listing->description }}</li>
                      <li>Email: {{ $listing->email }}</li>
                      <li>Phone: {{ $listing->phone }}</li>
                      <li>website: {{ $listing->website }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
