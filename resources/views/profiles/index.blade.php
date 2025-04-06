@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <!-- Profile Picture -->
            <div class="text-center">
                <img src="{{ 'https://via.placeholder.com/40'  }}" alt="Profile Picture" class="rounded-circle img-fluid mb-3">
                <h4 class="font-weight-bold">{{ auth()->user()->name}}</h4>
                <p class="text-muted">Software Engineer</p>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Profile Information -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact Information</h5>
                    <ul class="list-unstyled">
                        <li><strong>Email:</strong> john.doe@example.com</li>
                        <li><strong>Phone:</strong> +1 123-456-7890</li>
                        <li><strong>Address:</strong> 1234 Main St, Hometown, Country</li>
                    </ul>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">About Me</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at sapien in lectus vehicula
                        laoreet. Proin eu arcu ut nisi suscipit bibendum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
