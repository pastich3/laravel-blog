@extends('layouts.app')

@section('content')
	<div>
		<div>
			<span class="d-flex justify-content-center font-weight-bold h3"> For our clients, execution of strategy becomes a core competency </span>
		</div>
		<div class="d-flex justify-content-center">
			<div class="p-4 card-shadow" style="max-width: 40em">
					<div style="line-height: 1.5em" class="h5 text-center">
						We help organizations develop a culture of innovation rooted in diversity, inclusion, dignity, and respect.
					</div>
					<div style="line-height: 1.5em" class="h5 mt-3 text-center">
						By creating shared experiences and a common language, we establish a way of working that keeps focus on the customer and enables distributed decision making. This makes your company more responsive and competitive.
					</div>
					<div style="line-height: 1.5em" class="h5 mt-3 text-center">
						We practice what we preach, by being both responsive and nimble. We don’t show up with a large team of consultants. Instead, we use experiential learning to develop your existing team both from the top down and the bottom up.
					</div>
			</div>
		</div>

		<div class="mt-5">
			@include('tatham._testimonial_carousel')
		</div>

		<div class="mt-5 d-flex justify-content-center">
			<div class="d-flex justify-content-between">
				<span class="card-shadow p-3 mx-3">
					<div class="d-flex justify-content-center"> <img style="height: 120px;" src="/images/nasa_logo.png"> </div>
					<div class="">
						Blah blah short description
					</div>
					<div class="d-none">
						Blah blah very very very very long description
					</div>
					<a href="#"> Read more &gt; </a>

				</span>
				<span class="card-shadow p-3 mx-3">
					<div class="d-flex justify-content-center"> <img style="height: 120px;" src="/images/wells_fargo_logo.png"> </div>
					<div class="">
						Blah blah short description
					</div>
					<div class="d-none">
						Blah blah very very very very long description
					</div>
					<a href="#"> Read more &gt; </a>

				</span>
				<span class="card-shadow p-3 mx-3">
					<div class="d-flex justify-content-center"> <img style="height: 120px;" src="/images/walmart_logo.png"> </div>
					<div class="">
						Blah blah short description
					</div>
					<div class="d-none">
						Blah blah very very very very long description
					</div>
					<a href="#"> Read more &gt; </a>

				</span>
			</div>
		</div>
		<div>

		</div>
		<!-- <div>
			namedrop clients
		</div> -->
		<!-- <div class="d-flex justify-content-center">
			<div style="max-width:800px">
				<div class="font-weight-bold d-flex">
					{{ __('tatham.landing_page_question_header') }}
				</div>
				<div class="mt-1 mb-3">
					{{ __('tatham.landing_page_question_content') }}
				</div>
			</div>
		</div> -->
	</div>

@endsection
