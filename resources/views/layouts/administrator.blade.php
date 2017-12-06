<!DOCTYPE html>
<html>
@include ('layouts.partials.head')
<body>

<!-- START NAV -->
<nav class="navbar is-white" style="margin-bottom: 20px;">
	<div class="container">
		<div class="navbar-brand">
			<a class="navbar-item brand-text" href="/">
				<i class="fal fa-arrow-left" style="color: black;"></i>         
			</a>
		</div>
	</div>
</nav>
<!-- END NAV -->

<div class="container">
	<div class="columns">
		<div class="column is-3">
			<aside class="menu">
				<p class="menu-label">
					General
				</p>
				<ul class="menu-list">
					<li><a href="/admin">Dashboard</a></li>
					<li><a href="/admin/create">Create new blog post</a></li>
				</ul>
				<p class="menu-label">
					Administration
				</p>
				<ul class="menu-list">
					<li>
						<a>Things to manages</a>
						<ul>
							<li><a href="/admin/manage">Posts</a></li>
							<li><a href="/admin/manage">Comments</a></li>
							<li><a href="/admin/manage">Users</a></li>
							<li><a href="/admin/manage">Tags</a></li>
						</ul>
					</li>
				</ul>
			</aside>
		</div>
		<div class="column is-9">
			<section class="hero is-info welcome is-small">
				<div class="hero-body">
					<h1 class="title">
						Welcome back, {{ Auth::user()->name }}.
					</h1>
					<h2 class="subtitle" style="font-size: 1.2rem;">{{ $subtitle }}</h2>
				</div>
			</section>
			@yield ('content')
		</div>
	</div>
</div>

@yield ('scripts')
</body>
</html>
