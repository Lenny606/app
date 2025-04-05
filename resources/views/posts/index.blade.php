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
                                    <strong>{{ $post->user->name }}</strong>

                                </a>
                            @else
                                <img
                                    src="{{'https://via.placeholder.com/40'}}"
                                    alt="{{ "" }}" class="rounded-circle" width="50" height="50">
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <p class="fs-5 text-dark">{{ $post->caption }}</p>
                                <img src="{{ asset('storage/'. $post->image_path) }}" alt="{{ $post->id }}"
                                     class="img-fluid rounded"/>
                            </div>

                            <p>By <strong>{{ $post->user->name }}</strong>
                                on {{ $post->created_at->format('F d, Y') }}
                            </p>
                            <hr>
                        </div>
                        <div class="card-footer">
{{--                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>--}}
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <form action="{{  route('likes.store', $post->id) }}" method="POST">

                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-primary">
                                    Like
                                </button>
                            </form>
{{--                            {{ dump($post->likes) }} --}}
                            <span>
                                @if(count($post->likes))
                                    <i class="fas fa-thumbs-up"></i>
                                @else
                                    <i class="fas fa-thumbs-down"></i>
                                @endif
</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
