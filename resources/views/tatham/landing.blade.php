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

<!-- 	<landing-contact
		user-name-placeholder="@lang('users.placeholder.name')"
		user-email-placeholder="@lang('users.placeholder.email')"
		company-name-placeholder="@lang('tatham.placeholder.company_name')"
		user-name-label="@lang('users.attributes.name')"
		user-email-label="@lang('users.attributes.email')"
		company-name-label="@lang('tatham.attributes.company_name')"
		button="@lang('tatham.submit')"
	>
	</landing-contact> -->
@endsection
