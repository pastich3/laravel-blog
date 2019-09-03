@extends('layouts.app')

@section('content')
	<div>
		<div>

		</div>

		<span class="d-flex justify-content-center font-weight-bold huge"> What sets Tatham apart? </span>
		<div class="d-flex justify-content-center">
			<div class="p-4 card-shadow" style="max-width: 40em">
				<span class="d-flex text-center">
					We help clients make execution of strategy a core competency.
					We work closely with clients to develop a culture rooted in diversity, inclusion, dignity, and respect.
					We leverage experiential learning to provide shared experience and a common language as the basis for a way of working that keeps focus on the customer, and provides transparency and sufficient structure to allow for distributed decision making.
					We will not show up with a large team of consultants, we will develop your existing team from the top down, and the bottom up.
				</span>
			</div>
		</div>

		<div class="mt-5 d-flex justify-content-center">
			<div class="d-flex justify-content-between w-75">
				<span>33 customers helped</span>
				<span>$1 billion saved</span>
				<span>3 months</span>
			</div>
		</div>
		<div>
			NASA &lt;icon&gt; redesigned the operations process for the Hubble Space Telescope so that wait time for scientists went from 18 months to 3 weeks and cut cost by $100M.
		</div>
		<div>

		</div>
	@include('tatham._testimonial_carousel')
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
