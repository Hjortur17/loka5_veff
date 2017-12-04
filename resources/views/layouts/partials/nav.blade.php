@if ( Auth::check() ) {{-- EF ÉG ER SIGNAÐUR INN ÞÁ BYRTIST ÞETTA --}}
	<div class="dropdown">
		<button class="dropbtn"><a href="/profile"><i class="fal fa-user-circle"></i></a></button>
		<div class="dropdown-content">
			@if (Auth::id() === 1)
				<a href="/admin">View my profile</a>
			@else
				<a href="/profile">View my profile</a>
			@endif

			{{-- LOG OUT BUTTON --}}
			<a onclick="event.preventDefault();
				document.getElementById('logout').submit();
			">
				Log Out
			</a>
			<form id="logout" method="POST" action="/logout">
				{{ csrf_field() }}
			</form>
			{{-- LOG OUT BUTTON ENDS --}}
		</div>
	</div>
@else {{-- EF ÉG ER EKKI SIGNAÐUR INN ÞÁ BYRTIST ÞETTA --}}
	<ul>
		<li>
			<a href="/login">Log In</a>
		</li>
		<li>
			<a href="/register">Register</i></a>
		</li>
	</ul>
@endif