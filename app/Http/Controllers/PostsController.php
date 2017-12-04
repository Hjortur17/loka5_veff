<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Tag;
use Auth;

class PostsController extends Controller
{
	public function index()
	{
		$posts = Post::latest()->get();

		$tags = Tag::get();
		
		return view('posts.homepage', compact('posts', 'tags'));
	}

	public function show(Post $post)
	{
		return view('posts.show', compact('post'));
	}
}
