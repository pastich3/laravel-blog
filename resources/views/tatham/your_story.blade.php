@extends('layouts.app')
@section('content')
	<div class="justify-content-center d-flex font-weight-bolder huge"> {{ __('tatham.your_story') }} </div>
		<div class="justify-content-center d-flex huge"> {{ __('tatham.your_story_content.inaction_mega_header') }} </div>
			<h3> {{ __('tatham.your_story_content.cost_of_inaction_header') }} </h3>
				<div class="ml-5 mr-5"> {!! __('tatham.your_story_content.cost_of_inaction_content') !!} </div>
			<h3> {{ __('tatham.your_story_content.difficulty_accomplishing_change_header') }} </h3>
				<div class="ml-5 mr-5"> {!! __('tatham.your_story_content.difficulty_accomplishing_change_content') !!} </div>
		<div class="justify-content-center d-flex huge"> {{ __('tatham.your_story_content.change_mega_header') }} </div>
			<h3> {{ __('tatham.your_story_content.change_header') }} </h3>
				<div class="ml-5 mr-5"> {!! __('tatham.your_story_content.change_content') !!} </div>
		<div class="justify-content-center d-flex huge"> {{ __('tatham.your_story_content.journey_mega_header') }} </div>
			<h3> {{ __('tatham.your_story_content.start_journey_header') }} </h3>
				<div class="ml-5 mr-5"> {!! __('tatham.your_story_content.start_journey_content') !!} </div>
			<h3> {{ __('tatham.your_story_content.boot_camp_header') }} </h3>
				<div class="ml-5 mr-5"> {!! __('tatham.your_story_content.boot_camp_content') !!} </div>
			<h3> {{ __('tatham.your_story_content.sustainability_header') }} </h3>
				<div class="ml-5 mr-5"> {!! __('tatham.your_story_content.sustainability_content') !!} </div>
		<div class="justify-content-center d-flex huge"> {{ __('tatham.your_story_content.results_mega_header') }} </div>
			<h3> {{ __('tatham.your_story_content.can_you_header') }} </h3>
				<div class="ml-5 mr-5"> {!! __('tatham.your_story_content.can_you_content') !!} </div>
			<h3> {{ __('tatham.your_story_content.clients_header') }} </h3>
				<div class="ml-5 mr-5"> {!! __('tatham.your_story_content.clients_content') !!} </div>

	@include('tatham._testimonial_carousel')

@endsection
