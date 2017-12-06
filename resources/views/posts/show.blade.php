{{-- ÞETTA POST ER NOTAÐ TIL AÐ SÝNA UPPLÝSINGAR UM FÆRSLU --}}
@extends ('layouts.story')

@section ('content')
	<div class="column is-10 is-offset-1">
		<div class="columns">
			<div class="column is-5 info-panel">
				<div class="column is-12">
					<h2>The Requirements</h2>
					<ul>
						<li>{{ $post->requirements }}</li>
					</ul>
				</div>
				<div class="column is-12">
					<h2>Tags</h2>
					<ul>
						@foreach($post->tags()->get() as $tag)
							@if ($loop->last)
								<a href="/posts/tags/{{ $tag->tags }}">
									<li>{{ $tag->tags }}</li>
								</a>
							@else
								<a href="/posts/tags/{{ $tag->tags }}">
									<li>{{ $tag->tags . ','}}</li>
								</a>
							@endif
						@endforeach
					</ul>
				</div>
			</div>

			<div class="column is-7">
				<h1>The Project</h1>
				<p>{{ $post->description }}</p>
			</div>
		</div>
		<hr>
	</div>

	{{-- Ef það koma vila úr COMMENT form-inu þá byrtist þetta --}}
	@include ('layouts.errors') 

	{{-- Er að taka inn COMMNET FORMIÐ --}}
	@include ('layouts.partials.comments')

	@section ('scripts')
		<script type="text/javascript" src="/js/goback.js"></script>
	@endsection
@endsection