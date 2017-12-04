{{-- ÞETTA POST ER TIL ÞESS AÐ NOTANDINN EÐA AÐRIR NOTENDUR GETA SÉÐ UPPLÝSINGAR UM SIG EÐA AÐRA NOTENDUR --}}
@extends ('layouts.administrator')

@section ('content')
<div class="column is-10 is-offset-1">
		<section id="create-new-post">
			<form method="POST" action="/admin/post">
				{{ csrf_field() }}

				<div class="field">
					<label class="label">Title</label>
					<div class="control">
						<input class="input" name="title" placeholder="Title">
					</div>
				</div>

				<div class="field">
					<label class="label">Image</label>
					<div class="control">
						<div class="select is-fullwidth">
							<select>
								<option>Icelandic Nature</option>
								<option>With options</option>
							</select>
						</div>
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

				<div class="field">
					@include ('layouts.errors')
				</div>
			</form>
		</section>
	</div>
	</div>
</section>
@endsection