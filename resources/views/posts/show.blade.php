@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="{{ asset('storage/' . $post->image_path) }}" alt="" class="w-100">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
{{--                        <h3>{{ $post->title }}</h3>--}}
                    </div>
                    <div class="card-body">
{{--                        <p>{{ $post->content }}</p>--}}
                    </div>
                    <div class="card-footer text-muted">
                        <small>Published on {{ $post->created_at->format('F j, Y, g:i a') }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

