<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Html;

use Auth;
use App\User;
use App\Post;
use App\Tag;
use App\Comment;

class AdminController extends Controller
{
	public $posts = [];
	public $tags = [];

	public $nr_posts = [];
	public $nr_users = [];
	public $nr_comments = [];

	public function __construct()
	{
		$this->subtitle = 'Ready to make some changes to day?';
		$this->posts = Post::latest()->get(); // Get all the posts
		$this->tags = Tag::latest()->get(); // Get all the tags

		$this->nr_posts = Post::count(); // Count the number of posts
		$this->nr_users = User::count(); // Count the number of users on the site
		$this->nr_comments = Comment::count(); // Count the comments

		$this->middleware('admin');
		$this->middleware('auth')->only('create', 'store');
	}

	public function index()
	{
		return view('posts.admin.admin', [
			'subtitle' => $this->subtitle,
			'posts' => $this->posts,
			'nr_posts' => $this->nr_posts,
			'users' => $this->nr_users,
			'comments' => $this->nr_comments,
		]);
	}

	public function manage()
	{
		return view('posts.admin.manage', [
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
				'tags' => $this->tags
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
			'requirements' => 'required',
			'link_to_image' => 'required',
			'slug' => 'unique'
		]);

		$ids = [];
		foreach (request('tags') as $key => $tag) {
			$tag = Tag::firstOrCreate([
				'tags' => $tag,
			]);
			array_push($ids, $tag->id);
		}

		$post = Post::create([
			'title' => request('title'),
			'tags' => '',
			'description' => request('description'),
			'requirements' => request('requirements'),
			'link_to_image' => request('link_to_image'),
			'user_id' => Auth::user()->id,
			'slug' => str_slug(request('title'), '-'),
		]);

		$post->tags()->attach($ids);

		// Redirect to the homepage
		return redirect()->route('admin.index');
	}

	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		return redirect()->route('admin.index');
	}

}
