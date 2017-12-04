{{-- ÞETTA POST ER NOTAÐ TIL AÐ BÚA TIL POST Á SÍÐUNNI --}}
@extends ('layouts.administrator')

@section ('content')
	<div class="column is-10 is-offset-1">
		<section id="create-new-post">
			<form method="POST" action="/admin/post">
				{{ csrf_field() }}

				<div class="field">
					@include ('layouts.errors')
				</div>

				<div class="field">
					<label class="label">Title</label>
					<div class="control">
						<input class="input" name="title" placeholder="Title">
					</div>
				</div>

				<div class="field">
					<label class="label">Header Image</label>
					<div class="control">
						<div class="select is-fullwidth">
							<select name="link_to_image">
								<option value="project_5.jpg" selected>Icelandic Nature</option>
								<option>With options</option>
							</select>
						</div>
					</div>
				</div>

				<div class="field">
					<label class="label">Tags</label>
					<div class="control">
						<input class="input" type="tags" id="tags" name="tags" placeholder="Tags">
					</div>
				</div>

				<div class="field">
					<label class="label">Requirements</label>
					<div class="control">
						<input class="input" name="requirements" placeholder="Requirements">
					</div>
				</div>

				<div class="field">
					<label class="label">Description</label>
					<div class="control">
						<textarea class="textarea" placeholder="Write a description for your post" name="description"></textarea>
					</div>
				</div>

				<div class="field is-grouped">
					<div class="control">
						<button class="button is-success" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</section>
	</div>

	@section ('scripts')
		<script type="text/javascript" src="/js/goback.js"></script>
		<script type="text/javascript" src="/js/tags.js"></script>
	@endsection
@endsection
