@extends('layouts.app')

@section('content')
	<div>
		<div class="">
			<div>
				<div class="font-weight-bold d-flex justify-content-center">
					{{ __('tatham.landing_page_question_header') }}
				</div>
				<div class="mt-1 mx-3">
					{{ __('tatham.landing_page_question_content') }}
				</div>
			</div>
		</div>
	</div>
	<div class="mt-2">
		@include('tatham._videos_embed')
	</div>

	@include('tatham._testimonial_carousel')
@endsection
