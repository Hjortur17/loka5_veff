{{-- ÞETTA LAYOUT ER NOTAÐ SÝNA FÆRSLUR--}}
{{-- POST/SHOW.BLADE.PHP --}}

<!DOCTYPE html>
<html>
@include ('layouts.partials.head')
<body>
	<header class="hero is-medium header" style="background-image: url('/css/img/posts/{{ $post->link_to_image }}')";>
		<div class="hero-head">
			<nav class="navbar">
				<div class="container">
					<div class="navbar-menu level-left">
						<span class="navbar-item">
							<a onclick="goBack()">
								<i class="fal fa-arrow-left"></i>
							</a>
						</span>
					</div>
					<div class="navbar-menu level-right">
						<span class="navbar-item">
							@include ('layouts.partials.nav')
						</span>
					</div>
				</div>
			</nav>
		</div>

		<div class="hero-body">
			<div class="container has-text-centered">
				<h1>{{ $post->title }}</h1>
			</div>
		</div>
	</header>

	<section id="posts">
		<div class="container">
			@yield ('content')
		</div>
	</section>

	@include ('layouts.partials.footer')

	@yield ('scripts')
</body>
</html>