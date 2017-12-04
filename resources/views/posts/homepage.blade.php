{{-- ÞETTA POST ER HEIMASÍÐAN --}}

@extends ('layouts.master')

@section ('content')
	<div class="tile is-8 is-vertical is-parent articals" style="padding-right: 35px;">
		@include ('layouts.articals')
	</div>
@endsection

@section ('sidebar')
	@include ('layouts.partials.sidebar')
@endsection
