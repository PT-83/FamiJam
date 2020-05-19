<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();

        return view('post.create', compact ('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = \App\Post::create($data);

        $this->storeImage($post);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($this->validatedData());

        $this->storeImage($post);

        return \redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }

    protected function validatedData()
    {
        return request()->validate([
            'title' => 'required',
            'body' => 'required',
            'imager' => 'sometimes|file|image|max:5000',
        ]);
    }
        
    protected function storeImage($post)
    {

        if (request()->has('image')){
            $post->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $post->image))->fit(500, 500, null, 'top-left');
            $image->save();
        }
    }
}
