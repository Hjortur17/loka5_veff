<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Post;
use App\Comment;

class AdminController extends Controller
{
	public $posts = [];
	public $nr_posts = [];
	public $users = [];
	public $comments = [];

	public function __construct()
	{
		$this->subtitle = 'Ready to make some changes to day?';
		$this->posts = Post::latest()->get(); // Get all the posts
		$this->nr_posts = Post::count(); // Count the number of posts
		$this->users = User::count(); // Count the number of users on the site
		$this->comments = Comment::count(); // Count the comments

		$this->middleware('admin');
		$this->middleware('auth')->only('create', 'store');
	}

	public function index()
	{
		return view('posts.admin.admin', [
			'subtitle' => $this->subtitle,
			'posts' => $this->posts,
			'nr_posts' => $this->nr_posts,
			'users' => $this->users,
			'comments' => $this->comments,
		]);
	}

	public function manage()
	{
		return view('posts.admin.managePosts', [
			'subtitle' => $this->subtitle,
			'posts' => $this->posts,
		]);
	}

	public function create()
	{
		if (Auth::id() === 1) {
			return view('posts.admin.create', [
				'subtitle' => 'Ready to create new posts to day?',
				'posts' => $this->posts,
			]);
		}
		else {
			$posts = Post::latest()->get();
		
			return view('posts.homepage', compact('posts'));
		}
	}

	public function store()
	{
		$this->validate(request(), [
			'title' => 'required',
			'description' => 'required',
			'slug' => 'unique'
		]);

		Post::create([
			'title' => request('title'),
			'description' => request('description'),
			'tags' => request('tags'),
			'requirements' => request('requirements'),
			'link_to_image' => request('link_to_image'),
			'user_id' => Auth::user()->id,
			'slug' => str_slug(request('title'), '-'),
		]);


		// Redirect to the homepage
		return redirect('/admin');
	}

}
