@extends('layouts.landing')

@section('content')
	<div class="d-flex justify-content-center align-items-center">
		<div class="container">
			<div id="testimonialCarousel" data-interval="12000" class="align-items-center px-md-4 px-xl-5 carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					@include('shared._carousel_testimonial', [
						'content' => "“In two days, the staff came out with a clear understanding of what we’re trying to do.  In my previous experience, it took a couple of weeks for people to even understand what business-process reengineering was.  Once the folks on the line are given the approach and the time to focus on the problems, they have all the answers.”",
						'person' => "Jim Falle, Executive Vice President & CFO,",
						'company' => "Aegon Canada",
						'bgColor' => 'gray',
						'itemActive' => 'active'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“The common sense approach to process improvement, coupled with the powerful Executive Boot Camp, has changed how executives and managers throughout Canada Life think about their jobs and the work they do and how service gets delivered at Canada Life. The impact on our organization has been immense, lasting and self-reinforcing. It truly has been the best investment I have made.”",
						'person' => "Bill Acton, President and Chief Operating Officer,",
						'company' => "Canada Life Assurance Company",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“The Tatham Group’s Boot Camp is an intense, valuable and thoroughly enjoyable experience. The interactive and engaging simulation of a classic challenge faced in business the world over, will leave you asking questions, demanding answers and searching deep into every part of your organization to do better for your Customers. Highly recommended!”",
						'person' => "Doug Brown, CEO,",
						'company' => "Canada Life Limited",
						'bgColor' => 'gray'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“I will stop doing this work when I see improvements stop or slow down. And I don’t see that happening in the foreseeable future.”",
						'person' => "Ron Beettam, President and CEO,",
						'company' => "Equitable Life of Canada",
						'bgColor' => 'gray'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“I have experienced Boot Camp first-hand, and I am confident that our NASA Senior Management Group and, ultimately, the whole NASA organization, will benefit from Boot Camp. I have seen the results at TRW, and I know other companies have experienced similar successes..”",
						'person' => "Daniel S. Goldin, Chief Administrator,",
						'company' => "NASA",
						'bgColor' => 'gray'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Strong recommendation for the merit and results of The Tatham Group and Boot Camp. At Rockwell Collins we leveraged its powerful effect as a component of our enterprise approach.”",
						'person' => "Patrick O’Brein, Business Development Director,",
						'company' => "Rockwell Collins",
						'bgColor' => 'gray'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Tatham will teach you how to empower your own people to challenge,question,renew and repair your processes in your company. I ran an extremely successful ,extremely profitable and highly visible apparel company and after going to Tatham’s Boot Camp, we took every financial measurement to record levels only because we challenged every employee to challenge every process, empowered them and let them go do it. We focused all our companies efforts on the customer, worked with the customer to fix ,renew or repair our mutual processes together and the results were staggering.”",
						'person' => "Ken Steward, President & Chief Executive Officer, Canada Division,",
						'company' => "Sara Lee Intimate Apparel",
						'bgColor' => 'gray'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Going through Boot Camp helped us realize that we needed to apply the same kind of rigour that we used to invest and develop treatments using the scientific method, to the processes we use to provide the care.”",
						'person' => "Dr. Shelly Fine, Chief of Oncology,",
						'company' => "Trillium Health Partners",
						'bgColor' => 'gray'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Participating in the Tatham Group’s Boot Camp we came away equipped with the means and opportunity to change the way we do business. We now think about our business in new and exciting ways building new capabilities and setting the stage for innovation, execution, team member engagement and simply ‘delighting our customers’. It’s about our ‘Journey to World Class’.”",
						'person' => "Kirk Bare, SVP and Business Leader,",
						'company' => "Wells Fargo Bank",
						'bgColor' => 'gray'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Boot Camp was enlightening. It helped me develop a new view of process design aligned with client expectations.”",
						'person' => "Dave Coffaro, Head of Trust & Fiduciary Services,",
						'company' => "Wells Fargo Bank",
						'bgColor' => 'gray'
					])
				</div>
				<a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div class="d-flex justify-content-center align-items-center">
		<!-- Vimeo::request('/me/videos', ['per_page' => 5], 'GET') -->
	</div>
	<landing-contact
		user-name-placeholder="@lang('users.placeholder.name')"
		user-email-placeholder="@lang('users.placeholder.email')"
		company-name-placeholder="@lang('tatham.placeholder.company_name')"
		user-name-label="@lang('users.attributes.name')"
		user-email-label="@lang('users.attributes.email')"
		company-name-label="@lang('tatham.attributes.company_name')"
		button="@lang('tatham.submit')"
	>	
	</landing-contact>
	<!-- <div class="d-flex justify-content-center align-items-center">
		<form>
			<input placeholder="@lang('users.placeholder.name')" type="text" name="name"> @lang('users.attributes.name')</form>
			<input placeholder="@lang('users.placeholder.email')" type="text" name="email"> @lang('users.attributes.email')</form>
			<input placeholder="@lang('tatham.placeholder.company_name')" type="text" name="company name"> @lang('tatham.attributes.company_name')</form>
		</form>
	</div> -->

@endsection
@push('inline-scripts')
<script>
	$(document).ready(function() {
		var items = $('#testimonialCarousel .carousel-item'), // grab all slides
		    heights = [], // create empty array to store height values
		    tallest; // create variable to make note of the tallest slide

		if (items.length) {
		    function normalizeHeights() {
		        items.each(function() { // add heights to array
		            heights.push($(this).height()); 
		        });
		        tallest = Math.max.apply(null, heights); // cache largest value
		        items.each(function() {
		            $(this).css('min-height',tallest + 'px');
		        });
		    };
		    normalizeHeights();

		    $(window).on('resize orientationchange', function () {
		        tallest = 0, heights.length = 0; // reset vars
		        items.each(function() {
		            $(this).css('min-height','0'); // reset min-height
		        }); 
		        normalizeHeights(); // run it again 
		    });
		}
	});
</script>
@endpush