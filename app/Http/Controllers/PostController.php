<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //only logged users
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'caption' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        var_dump($data);
        $imagePath = $request->file('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image_path' => $imagePath,
        ]);
        return redirect('/profile/' . auth()->id());
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if (auth()->id() !== $post->user_id){
            abort(403, 'Unauthorized action.');
        }
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post) : RedirectResponse
    {
        if (auth()->id() !== $post->user_id){
            abort(403, 'Unauthorized action.');
        }
        $data = $request->validate([
            'caption' => 'required|max:255',
        ]);

        $post->update($data);

        return redirect('/posts/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post) : RedirectResponse
    {
        if (auth()->id() !== $post->user_id){
            abort(403, 'Unauthorized action.');
        }

        Storage::disk('public')->delete($post->image_path); //remove img

        $post->delete();

        return redirect('/profile/' . auth()->id());
    }
}
