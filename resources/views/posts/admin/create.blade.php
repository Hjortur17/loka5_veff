{{-- ÞETTA POST ER NOTAÐ TIL AÐ BÚA TIL POST Á SÍÐUNNI --}}
@extends ('layouts.administrator')

@section ('content')
	<div class="column is-10 is-offset-1">
		<section id="create-new-post">
			{{ Form::open(['route' => ['admin.store'], 'method' => 'post']) }}
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
								<option value="project_1.jpg" selected>Icelandic natture</option>
								<option value="project_2.jpg">Seljalandsfoss</option>
								<option value="project_3.jpg">Waterfall</option>
								<option value="project_4.jpg">Geysir</option>
								<option value="project_5.jpg">Waterfall with Kirkjufell in the background</option>
								<option value="project_6.jpg">Skógarfoss</option>
								<option value="project_7.jpg">Northin light</option>
								<option value="project_8.jpg">Glacier lagoon</option>
								<option value="project_9.jpg">Gullfoss</option>
								<option value="project_10.jpg">Blue lagoon and the icelandic natture</option>
							</select>
						</div>
					</div>
				</div>

				<div class="field">
					<label class="label">Client</label>
					<div class="control">
						<input class="input" name="client" placeholder="Client">
					</div>
				</div>

				<div class="field">
					<label class="label">{{ Form::label('tags', 'Tags') }}</label>
					<div class="control">
						<div class="select is-fullwidth">
							<select class="select-multiple" name="tags[]" multiple="multiple">
								@foreach ($tags as $tag)
									<option value="{{ $tag->tags }}">{{ $tag->tags }}</option>
								@endforeach
							</select>
						</div>
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
			{{ Form::close() }}
		</section>
	</div>

	@section ('scripts')
		<script type="text/javascript" src="/js/goback.js"></script>
		<script type="text/javascript" src="/js/tags.js"></script>
		<script type="text/javascript">
			$(".select-multiple").select2({
			    tags: true,
			    tokenSeparators: [',', ' ']
			})
		</script>
	@endsection
@endsection
