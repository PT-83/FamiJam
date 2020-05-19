<div class="container">
    <div class="row justify-content-cemter">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create New Post</div>


                <div class="card-body">
                    <form action="posts/create" method="POST" enctype="multipart/form-data">


                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title" autocomplete="off">
                            <small id="titleHelp" class="form-text text-muted">Give your post a title that will describe your post easily</small>
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea type="text" name="body" cols="30" rows="3" class="form-control" id="body" aria-describedby="bodyHelp" placeholder="Enter Post Body" autocomplete="off"></textarea>
                             <small id="bodyHelp" class="form-text text-muted">Enter as much detail you'd like!</small>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="py-2">
                        <div>{{ errors->first('image') }}</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Post</button>

                        @if (session('message'))

                            <div>
                                {{ session('message') }}
                            </div>
                        @endif

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