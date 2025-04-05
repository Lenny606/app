@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($posts as $post)
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            @if($post->user)
                                <img
                                    src="{{ $post->user->profile_image ? asset('storage/'. $post->user->profile_image) : ""}}"
                                    alt="{{ $post->user->id }}" class="rounded-circle" width="50" height="50">
                                <a href="{{ route('profile.index', $post->user->id) }}" class="ml-2"
                                   style="text-decoration: none; color: #000;">
                                    <strong>{{ $post->user }}</strong>

                                </a>
                            @else
                                <img
                                    src="{{'https://via.placeholder.com/40'}}"
                                    alt="{{ "" }}" class="rounded-circle" width="50" height="50">
                            @endif
                        </div>
                        <div class="card-body">
                            <p>By <strong>{{ $post->user->username }}</strong>
                                on {{ $post->created_at->format('F d, Y') }}
                            </p>
                            <hr>
                        </div>
                        <div class="card-footer">
{{--                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>--}}
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <form action="{{ route('posts.like', $post->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-primary">
                                    Like ({{ $post->likes_count }})
                                </button>
                            </form>
                            <span>{{ $post->likes_count > 0 ? $post->likes_count . ' people liked this' : 'No likes yet' }}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
