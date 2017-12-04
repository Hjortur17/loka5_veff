{{-- ÞETTA POST ER TIL ÞESS AÐ NOTANDINN EÐA AÐRIR NOTENDUR GETA SÉÐ UPPLÝSINGAR UM SIG EÐA AÐRA NOTENDUR --}}
@extends ('layouts.administrator')

@section ('content')
<section class="info-tiles">
	<div class="tile is-ancestor has-text-centered">
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">{{ $users }}</p>
				<p class="subtitle">Users</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">{{ $nr_posts }}</p>
				<p class="subtitle">Posts</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">{{ $comments }}</p>
				<p class="subtitle">Comments</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<p class="title">?</p>
				<p class="subtitle">Likes</p>
			</article>
		</div>
	</div>
</section>
<div class="columns">
	<div class="column is-6">
		<div class="card events-card">
			<header class="card-header">
				<p class="card-header-title">Posts</p>
				<a href="#" class="card-header-icon" aria-label="more options">
					<span class="icon">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</span>
				</a>
			</header>
			<div class="card-table">
				<div class="content">
					<table class="table is-fullwidth is-striped">
						<tbody>
							@foreach ($posts as $post)
								<tr>
									<td>{{ $post->title }}</td>
									<td>
										<a class="button is-small is-primary" href="/posts/{{ $post->slug }}" style="font-weight: bold;">View Post</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>        
	</div>
	<div class="column is-6">
		<div class="card">
			<header class="card-header">
				<p class="card-header-title">
					User Search
				</p>
				<a href="#" class="card-header-icon" aria-label="more options">
					<span class="icon">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</span>
				</a>
			</header>
		<div class="card-content">
			<div class="content">
				<div class="control">
					<input class="input is-large" type="text" placeholder="What user are you looking for?" style="font-size: 15px;">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<header class="card-header">
			<p class="card-header-title">
				Tag Search
			</p>
		</header>
		<div class="card-content">
			<div class="content">
				<div class="control">
					<input class="input is-large" type="text" placeholder="What tag are you looking for?" style="font-size: 15px;">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection