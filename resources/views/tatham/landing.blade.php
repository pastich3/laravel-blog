@extends('layouts.app')

@section('content')
	<div>
		<div class="d-flex justify-content-center">
			<div style="max-width:800px">
				<div class="font-weight-bold d-flex">
					{{ __('tatham.landing_page_question_header') }}
				</div>
				<div class="mt-1 mb-3">
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
