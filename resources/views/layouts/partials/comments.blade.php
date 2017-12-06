@if ($flash = session('message'))
	<script type="text/javascript">
		swal({
			title: "Good job!", 
			text: "{{ $flash }}", 
			icon: "success",
			button: false,
			timer: 2500,
		});
	</script>
@endif

@foreach ($post->comments as $comment)
	<article class="media" id="comments">
		<div class="media-content">
			<div class="content">
				<p>
					<strong>{{ $comment->user->name }}</strong> &nbsp; <small>{{ $comment->user->username }}</small> &nbsp; <small>{{ $comment->created_at->diffForHumans() }}</small>
					<br>
					{{ $comment->body }}
				</p>
			</div>
			<nav class="level is-mobile">
				<div class="level-left">
					<a class="level-item">
					</a>
				</div>
			</nav>
		</div>
	</article>
@endforeach

<br>

@if (Auth::check())
	<form method="POST" action="/posts/{{ $post->slug }}/comments">
		{{ csrf_field() }}

		<article class="media">
			<div class="media-content">
				<div class="field">
					<p class="control">
						<textarea class="textarea" name="body" placeholder="Add a comment..."></textarea>
					</p>
				</div>
				<div class="field ">
					<p class="control">
						<div class="buttons is-right">
							<button class="button is-success is-selected" type="submit">Post comment</button>
						</div>
					</p>
				</div>
			</div>
		</article>
	</form>
@else
	<p><strong>Please login to comment</strong></p>
@endif