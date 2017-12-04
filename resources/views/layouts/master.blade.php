<!DOCTYPE html>
<html>
@include ('layouts.partials.head')
<body>
	@include ('layouts.partials.header')

	<section>
		<div class="container">
			<div class="tile is-ancestor">
				@yield ('content')
				@yield ('sidebar')
			</div>
		</div>
	</section>

	@include ('layouts.partials.footer')
</body>
</html>