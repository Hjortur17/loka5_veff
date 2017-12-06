<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Post extends Model
{
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function addComment($body)
	{
		$this->comments()->create([
			'body' => $body,
			'user_id' => auth()->id()
		]);
	}

	protected $fillable = [
		'title', 'description', 'requirements', 'link_to_image', 'user_id', 'slug'
	];

	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}	
}
