@extends ('layouts.forms')

@section ('content')
	<div class="has-text-centered wrapper">
		<div class="column">
			<h1>Sign In</h1>
			{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p> --}}
		</div>

		@include ('layouts.errors')

		<div class="column is-three-fifths is-offset-one-fifth">
			<form method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}

				<div class="column">
					<div class="field">
						<div class="control">
							<input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus placeholder="Username">
						</div>
					</div>
				</div>

				<div class="column">
					<div class="field">
						<div class="control">
							<input id="password" type="password" class="form-control" name="password" required placeholder="Password">
						</div>
					</div>
				</div>

				<div class="column">
					<div class="field is-grouped is-grouped-centered">
						<p class="control">
							<button type="submit">Login</button>
						</p>
					</div>
				</div>

				<div class="column has-text-centered">
					<div class="field">
						<div class="control">
							<ul>
								<li>
									<a href="/register">Register Now</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection