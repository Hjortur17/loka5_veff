{{-- ÞETTA LAYOUT ER ALL CONTENT-IÐ Á HOMEPAGE - ÞETTA ER GERT SVO KÓÐINN VERÐI SNIRTILEGUR --}}
{{-- POSTS/HOMEPAGE.BLADE.PHP --}}


@foreach ($posts as $post)
	@if ($loop->first)
		<div class="big_post">
			<h4><span>{{ $post->created_at->toFormattedDateString() }}</span></h4>
			<a href="/posts/{{ $post->slug }}"><h1 class="post_header big_header">{{ $post->title }}</h1></a>
			<img src="/css/img/posts/{{ $post->link_to_image }}" class="big_post_img">
			<div class="has-text-centered" style="margin-bottom: 10px;">
				<a href="/posts/{{ $post->slug }}" class="full_story_button">Full Story</a>
			</div>
		</div>
		<hr>
	@else
		<div class="small_post">
			<div class="columns">
				<div class="column is-5">
					<div class="float_left">
						<img src="/css/img/posts/{{ $post->link_to_image }}" class="small_post_img">
					</div>
				</div>
				<div class="column is-7">
					<div class="float_right">
						<a href="/posts/{{ $post->slug }}"><h2 class="post_header small_header">{{ $post->title }}</h2></a>
						<small>{{ $post->created_at->toFormattedDateString() }}</small>
						<p>{{ substr($post->description, 0, 500)}}{{strlen($post->description)> 250 ? "..." : ""}}</p>

						<a href="/posts/{{ $post->slug }}" class="small_full_story_button">Full Story</a>
					</div>
				</div>
			</div>
		</div>
		<hr>
	@endif
@endforeach