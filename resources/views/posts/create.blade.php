@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>

                    <div class="card-body">

                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @csrf

                            <div class="mb-4">
                                <label for="caption" class="block text-sm font-medium text-gray-700">Caption</label>
                                <textarea
                                    name="caption"
                                    id="caption"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Enter post caption"
                                    required
                                > </textarea>
                                @error('caption')
                                    <span class="text-red-500 text-xs" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <button
                                type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Create Post
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

