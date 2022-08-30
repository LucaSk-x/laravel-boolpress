<?php

namespace App\Http\Controllers\Api;

use App\Admin\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

  private function getPostImg($post)
  {
    $toReturn = null;
    
    if ($post->imgUrl) {
      $toReturn = asset("storage/" . $post->imgUrl);
    }
    return $toReturn;
  }


  public function index()
  {
    $posts = Post::all();

    return response()->json($posts);
  }

  public function show($id) {

    $post= Post::where("id", $id)->first();
    
    $post->load("user:id,name");

    return response()->json($post);
  }
}
