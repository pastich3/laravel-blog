@extends('layouts.landing')

@section('content')
	<div class="d-flex justify-content-center align-items-center">
		<div class="container">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					@include('shared._carousel_testimonial', [
						'content' => "“In two days, the staff came out with a clear understanding of what we’re trying to do.  In my previous experience, it took a couple of weeks for people to even understand what business-process reengineering was.  Once the folks on the line are given the approach and the time to focus on the problems, they have all the answers.”",
						'person' => "Jim Falle, Executive Vice President & CFO,",
						'company' => "Aegon Canada",
						'bgColor' => 'gray',
						'itemActive' => '-active'
					])
					<!-- <div class="carousel-item">
						Snippet goes here 2
					</div>
					<div class="carousel-item">
						Snippet goes here 3
					</div> -->
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div class="d-flex justify-content-center align-items-center">
		section: demo videos
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