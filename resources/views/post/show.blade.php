@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="pt-3 pl-3 pr-3 card">
                <h1 class="text-secondary">Post Details</h1>

                    <div>
                        <a href="/posts"><- Back</a>
                    </div> 

                    <strong class="text-secondary mt-2">Title</strong>
                         <p>{{ $post->title }}</p>

                    <strong class="text-secondary mt-2">Body</strong>
                        <p>{{ $post->body }}</p>

                <div>
                    <a href="/posts/{{ $post->id }}/edit">Edit</a>

                    <form action="/posts/{{ $post->id }}" method="post">
                         @method('DELETE')
                        @csrf

                        <button class="btn btn-danger mt-3 mb-3">Delete</button>  
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection