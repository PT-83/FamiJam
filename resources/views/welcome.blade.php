@extends('layouts.app')

@section('content')

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col">
            <h1 class="mb-3 text-center display-3 text-secondary">Document Family Traditions</h1> 
        </div>
    </div>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col">
            <h3 class="mt-3 text-secondary">Family is important! So are the many memories and experiences we want to remember! Welcome to Famijam. A place to document any family tradition or memory!!! </h3>
        </div>
            <div class="col text-center">
                <img src="/images/Love.svg" class="img-fluid" alt="Responsive image">
        </div>
    </div>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col text-center">
            <img src="/images/Fun.svg" class="img-fluid" alt="Responsive image">
        </div>
            <div class="col"> 
        <h3 class="mt-3 text-secondary">Why is this important you ask? Simply. Family won't be around forever, what better than to document things you don't want to forget. So when desired you can reflect back at that funny moment, family photograph, or to show your kids and grandkids! </h3>
    </div>
</div>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col">
            <h3 class="mt-3 text-secondary">What kind of things should you submit? Our answer, anything you desire. Homemade recipes, favourite jokes, stories, experiences, photographs and alike.
                </h3>
                    </div>
                <div class="col text-center">
            <img src="/images/Photo.svg" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-6">

            <h2 class="d-flex">Ready to Join?</h2> 
            <h2 class="text-primary"> Start By Signing Up </h2>

            <a class=" mt-3 btn btn-primary btn-lg btn-block" href="/register" role="button">Sign Up</a>
        </div>
    </div>
</div>

@endsection

