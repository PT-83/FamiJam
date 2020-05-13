@extends('layouts.app')

@section('content')

<h1>Edit Post</h1>

<form action="/posts/{{$post->id }}" method="POST">

    @method('PATCH')

    <div>
        <input type="text" name="title" placeholder="Title" autocomplete="off" value="{{ $post->name }}">
        @error ('title') <p style="color:red;">{{ $message }}</p> @enderror
    </div>  

    <div>
        <input type="text" name="body" placeholder="Body" autocomplete="off" value="{{ $post->body }}">
        @error ('body') <p style="color:red;">{{ $message }}</p> @enderror
    </div>  

    @csrf
    
    <button>Save Edited Post</button> 

</form>  

@endsection