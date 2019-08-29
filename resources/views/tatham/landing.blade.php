@extends('layouts.landing')

@section('content')
	<div>
		<div class="">
			<div>
				<div class="font-weight-bold">
					Why do the same problems keep recurring in your organization?
				</div>
				<div class="mt-1">
					Why does a strategy developed by your best people or an outside consultant bog down as soon as it hits your front-line people? Why is the status quo so difficult to change? Why indeed. At The Tatham Group, we don’t give you the answers. We give you a way to solve these problems yourself, once and for all. In the process, your organization will do more with less, reach its true potential, save millions of dollars thanks to insights gained and delight your customers.
				</div>
			</div>
		</div>
	</div>
	<div>
		@include('tatham._videos_embed')
	</div>
	<!-- <div style="background-color: lightgray; height: 430px" class="mt-3 d-flex justify-content-center align-items-center">
		Video Content
	</div>
	<div style="background-color: gray; height: 162px" class="d-flex justify-content-center align-items-center">
		Video selector
	</div> -->
	@include('tatham.testimonial_carousel')
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
