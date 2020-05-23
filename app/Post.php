<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
protected $guarded = [];

public function userPosts ()

{
 return $this->hasMany('App\userPosts');

 $userPosts = App\Post::find(all)->userPosts;

 foreach ($userPosts as $userPost) {
   
 }

}

}



