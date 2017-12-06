{{-- ÞETTA POST ER TIL ÞESS AÐ NOTANDINN EÐA AÐRIR NOTENDUR GETA SÉÐ UPPLÝSINGAR UM SIG EÐA AÐRA NOTENDUR --}}
@extends ('layouts.administrator')

@section ('content')
	<section id="manageItem">
			<div class="card-table">
				<div class="content">
					<table class="table is-fullwidth is-striped">
						<tbody class="manageItem">
							@foreach ($posts as $post)
								<tr onclick="showDiv()">
									<td>
										<a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
									</td>

									<td style="float: right;">
										<i class="fal fa-angle-down"></i>
									</td>
								</tr>
								<div id="welcomeDiv" style="display:none;" class="answer_list">WELCOME</div>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
@endsection

@section ('scripts')
	<script type="text/javascript" src="/js/showdiv.js"></script>
@endsection