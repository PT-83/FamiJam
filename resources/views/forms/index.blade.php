@extends('layouts.app')

@section('content')

<form>
    <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Enter Your Name">
      </div>
    <div class="form-group">
      <label for="inputEmail1">Email address</label>
      <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection