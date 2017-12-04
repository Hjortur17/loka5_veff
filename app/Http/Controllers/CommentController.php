<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function store(Post $post)
	{
		$this->validate(request(), ['body' => 'required|min:2']);

		$post->addComment(request('body'));

		session()->flash('message', 'Your comment has been posted');

		return back();
	}
}
