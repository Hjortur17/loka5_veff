{{ Form::open(['route' => ['admin.destroy', $post->id], 'method' => 'delete']) }}
	<button type="submit" class="admin-button"><i class="fal fa-trash"></i></button>
{{ Form::close() }}