{{-- ÞETTA LAYOUT ER NOTAÐ TIL AÐ BÚA TIL EÐA SKRÁ INN NOTENDUR --}}
{{-- AUTH/LOGIN.BLADE.PHP & AUTH/REGISTER.BLADE.PHP --}}

<!DOCTYPE html>
<html>
@include ('layouts.partials.head')
<body>
	<header class="hero is-fullheight" id="form_section">
		<div class="hero-body">
			<div class="container">
				@yield ('content')
			</div>
		</div>
	</header>
</body>
</html>