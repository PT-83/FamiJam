@extends('layouts.app')

@section('content')

<div class="row">
    @forelse($posts as $post)
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            
            <div class="card-body">
                <p class="card-text">{{ $post->title }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="/posts/{{ $post->id }}" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div>
    @empty

    <p class=ml-5>No Posts Currently</p>

    @endforelse
</div>
@endsection