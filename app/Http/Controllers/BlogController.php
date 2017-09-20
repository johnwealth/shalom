<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
    public function index(){

    	$posts = Post::simplePaginate(3);
    	return view('index')->withPosts($posts);
    }


      public function show($slug){

    	$post = Post::findBySlug($slug);
    	return view('post.single', ['post'=>$post]);
    }
}
