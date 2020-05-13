@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Contact Famijam</div>

                <div class="card-body">
                    <form action="/contact" method="POST">
                        

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Your Name" autocomplete="off" value="">

                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email" autocomplete="off" value="">

                        </div>

                          <div class="form-group">
                            <label for="text">Text</label>
                            <textarea type="text" name="text" class="form-control" id="text" cols="30" rows="3" aria-describedby="textHelp" placeholder="Message" autocomplete="off"></textarea>

                        </div>

                        @csrf

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    @if ($errors->any())
                        <div class="alert alert-danger mt-5">
                            <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection