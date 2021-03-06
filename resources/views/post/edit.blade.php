@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="pt-3 pl-3 pr-3 card">
                <h1 class="text-secondary">Edit Post</h1>

<form action="/posts/{{$post->id }}" method="POST" enctype="multipart/form-data">

    @method('PATCH')

    <div class="form-group">
        <input type="text" name="title" placeholder="Title" autocomplete="off" value="{{ $post->name }}">
        @error ('title') <p style="color:red;">{{ $message }}</p> @enderror
    </div>  

    <div class="form-group">
        <input type="text" name="body" placeholder="Body" autocomplete="off" value="{{ $post->body }}">
        @error ('body') <p style="color:red;">{{ $message }}</p> @enderror
    </div>  

    @csrf
    
    <button type="submit" class="btn btn-primary mt-3 mb-3">Save Edited Post</button> 

</form>

            </div>
        </div>
    </div>
</div>

@endsection