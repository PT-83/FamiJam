@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-3"> You are logged in!</div>
                <a href="/posts/create/" class="btn btn-dark">Create New Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
