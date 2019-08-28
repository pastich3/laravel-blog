@extends('layouts.landing')

@section('content')
	<div>
		<div class="">
			<div id="testimonialCarousel" style="height: 180px" data-interval="12000" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					@include('shared._carousel_testimonial', [
						'content' => "“In two days, the staff came out with a clear understanding of what we’re trying to do.  In my previous experience, it took a couple of weeks for people to even understand what business-process reengineering was.  Once the folks on the line are given the approach and the time to focus on the problems, they have all the answers.”",
						'person' => "Jim Falle",
						'title' => "Executive Vice President & CFO",
						'company' => "Aegon Canada",
						'bgColor' => 'gray',
						'itemActive' => 'active'
					])

					@include('shared._carousel_testimonial', [
						'content' => "“The common sense approach to process improvement, coupled with the powerful Executive Boot Camp, has changed how executives and managers throughout Canada Life think about their jobs and the work they do and how service gets delivered at Canada Life. The impact on our organization has been immense, lasting and self-reinforcing. It truly has been the best investment I have made.”",
						'person' => "Bill Acton",
						'title' => "President and Chief Operating Officer",
						'company' => "Canada Life Assurance Company",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“The Tatham Group’s Boot Camp is an intense, valuable and thoroughly enjoyable experience. The interactive and engaging simulation of a classic challenge faced in business the world over, will leave you asking questions, demanding answers and searching deep into every part of your organization to do better for your Customers. Highly recommended!”",
						'person' => "Doug Brown",
						'title' => "CEO",
						'company' => "Canada Life Limited",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“I will stop doing this work when I see improvements stop or slow down. And I don’t see that happening in the foreseeable future.”",
						'person' => "Ron Beettam",
						'title' => "President and CEO",
						'company' => "Equitable Life of Canada",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“I have experienced Boot Camp first-hand, and I am confident that our NASA Senior Management Group and, ultimately, the whole NASA organization, will benefit from Boot Camp. I have seen the results at TRW, and I know other companies have experienced similar successes..”",
						'person' => "Daniel S. Goldin",
						'title' => "Chief Administrator",
						'company' => "NASA",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Strong recommendation for the merit and results of The Tatham Group and Boot Camp. At Rockwell Collins we leveraged its powerful effect as a component of our enterprise approach.”",
						'person' => "Patrick O’Brein",
						'title' => "Business Development Director",
						'company' => "Rockwell Collins",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Tatham will teach you how to empower your own people to challenge,question,renew and repair your processes in your company. I ran an extremely successful ,extremely profitable and highly visible apparel company and after going to Tatham’s Boot Camp, we took every financial measurement to record levels only because we challenged every employee to challenge every process, empowered them and let them go do it. We focused all our companies efforts on the customer, worked with the customer to fix ,renew or repair our mutual processes together and the results were staggering.”",
						'person' => "Ken Steward",
						'title' => "President & Chief Executive Officer, Canada Division,",
						'company' => "Sara Lee Intimate Apparel",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Going through Boot Camp helped us realize that we needed to apply the same kind of rigour that we used to invest and develop treatments using the scientific method, to the processes we use to provide the care.”",
						'person' => "Dr. Shelly Fine",
						'title' => "Chief of Oncology",
						'company' => "Trillium Health Partners",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Participating in the Tatham Group’s Boot Camp we came away equipped with the means and opportunity to change the way we do business. We now think about our business in new and exciting ways building new capabilities and setting the stage for innovation, execution, team member engagement and simply ‘delighting our customers’. It’s about our ‘Journey to World Class’.”",
						'person' => "Kirk Bare",
						'title' => "SVP and Business Leader",
						'company' => "Wells Fargo Bank",
						'bgColor' => 'gray',
					])

					@include('shared._carousel_testimonial', [
						'content' => "“Boot Camp was enlightening. It helped me develop a new view of process design aligned with client expectations.”",
						'person' => "Dave Coffaro",
						'title' => "Head of Trust & Fiduciary Services",
						'company' => "Wells Fargo Bank",
						'bgColor' => 'gray',
					])
				</div>
				<a class="justify-content-start ml-1 carousel-control-prev" style="width: 60px" href="#testimonialCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="justify-content-end mr-1 carousel-control-next" style="width: 60px" href="#testimonialCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div style="background-color: lightgray; height: 430px" class="mt-3 d-flex justify-content-center align-items-center">
		Video Content
		<!-- Vimeo::request('/me/videos', ['per_page' => 5], 'GET') -->
	</div>
	<div style="background-color: gray; height: 162px" class="d-flex justify-content-center align-items-center">
		Video selector
	</div>
	<div>
		<div class="font-weight-bold mt-5">
			Why do the same problems keep recurring in your organization?
		</div>
		<div class="mt-1">
			Why does a strategy developed by your best people or an outside consultant bog down as soon as it hits your front-line people? Why is the status quo so difficult to change? Why indeed. At The Tatham Group, we don’t give you the answers. We give you a way to solve these problems yourself, once and for all. In the process, your organization will do more with less, reach its true potential, save millions of dollars thanks to insights gained and delight your customers.
		</div>
	</div>
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