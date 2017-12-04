<div id="sidebar" class="tile is-vertical is-parent" style="padding-left: 35px;">
	<div class="sidebar_box welcome">
		<h3>Welcome</h3>
		<p>Hi and welcome to this school blog. The purpose of this site is to showcase my work in school. I'm a student a Fjölbrautaskóla Suðurnesja
		and have been there for 2 1/2 year now. This site is my final project for me fifth semestre, and on this site you can create a user, search for posts and if you sign up as a user than you can 
		comment on the post and view and download the code.</p>
		<br>
		<p>Because I'm from Iceland, and I really love the nature that why I choosed Iceland as a theme for this site. So every image you see is from Iceland.</p>
	</div>

	<div class="sidebar_box social">
		<ul>
			<li><a href="https://hjorturfreyr.com"><i class="fal fa-globe"></i></a></li> <!-- LINK TO THE MAIN SITE -->
			<li><a href="https://github.com/Hjortur17" target="_blank"><i class="fab fa-github"></i></a></li> <!-- LINK TO MY GITHUB PROFILE -->
			<li><a href="https://www.linkedin.com/in/hjorturfreyr/" target="_blank"><i class="fab fa-linkedin"></i></a></li> <!-- -->
			<li><a href="https://www.behance.net/hjorturfreyr" target="_blank"><i class="fab fa-behance"></i></a></li> <!-- -->
			<li><a href="https://dribbble.com/hjortur17" target="_blank"><i class="fab fa-dribbble"></i></a></li> <!-- -->
			<li><a href="https://www.instagram.com/hjortur17/" target="_blank"><i class="fab fa-instagram"></i></a></li> <!-- -->
		</ul>
	</div>

	<div class="sidebar_box search">
		<h3>Search</h3>
		<form method="GET">
			<div class="search_box">
				<input name="posts" type="text" id="input" value>
				<i class="fal fa-search"></i>
			</div>
		</form>
	</div>
	<div class="sidebar_box tags is-centered">
		<h3>Categories</h3>
			<ul>
				@foreach($tags as $tag)
					<li>
						<a href="/posts/tags/{{ $tag->name }}">
							{{ $tag->name }}
						</a>
					</li>
				@endforeach
			</ul>
	</div>
</div>