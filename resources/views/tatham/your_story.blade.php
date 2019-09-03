@extends('layouts.app')
@section('content')
	<div class="justify-content-center d-flex font-weight-bolder huge"> {{ __('tatham.your_story') }} </div>
		<div class="px-3 pb-3">
			<span class="justify-content-center d-flex huge"> {{ __('tatham.your_story_content.inaction_mega_header') }} </span>
			<div class="card-shadow p-3">
				<div class="h3"> {{ __('tatham.your_story_content.cost_of_inaction_header') }} </div>
				<div class="ml-3 mr-3"> {!! __('tatham.your_story_content.cost_of_inaction_content') !!} </div>
			</div>
			<div class="card-shadow mt-3 p-3">
				<div class="h3"> {{ __('tatham.your_story_content.difficulty_accomplishing_change_header') }} </div>
				<div class="ml-3 mr-3"> {!! __('tatham.your_story_content.difficulty_accomplishing_change_content') !!} </div>
			</div>
		</div>
		<div class="px-3 pb-3">
			<span class="justify-content-center d-flex huge"> {{ __('tatham.your_story_content.change_mega_header') }} </span>
			<div class="card-shadow p-3">
				<div class="h3"> {{ __('tatham.your_story_content.change_header') }} </div>
				<div class="ml-3 mr-3"> {!! __('tatham.your_story_content.change_content') !!} </div>
			</div>
		</div>
		<div class="px-3 pb-3">
			<span class="justify-content-center d-flex huge"> {{ __('tatham.your_story_content.journey_mega_header') }} </span>
			<div class="card-shadow p-3">
				<div class="h3"> {{ __('tatham.your_story_content.start_journey_header') }} </div>
				<div class="ml-3 mr-3"> {!! __('tatham.your_story_content.start_journey_content') !!} </div>
			</div>
			<div class="card-shadow mt-3 p-3">
				<div class="h3"> {{ __('tatham.your_story_content.boot_camp_header') }} </div>
				<div class="ml-3 mr-3"> {!! __('tatham.your_story_content.boot_camp_content') !!} </div>
			</div>
			<div class="card-shadow mt-3 p-3">
				<div class="h3"> {{ __('tatham.your_story_content.sustainability_header') }} </div>
				<div class="ml-3 mr-3"> {!! __('tatham.your_story_content.sustainability_content') !!} </div>
			</div>
		</div>
		<div class="px-3 pb-3">
			<span class="justify-content-center d-flex huge"> {{ __('tatham.your_story_content.results_mega_header') }} </span>
			<div class="card-shadow p-3">
				<div class="h3"> {{ __('tatham.your_story_content.can_you_header') }} </div>
				<div class="ml-3 mr-3"> {!! __('tatham.your_story_content.can_you_content') !!} </div>
			</div>
			<div class="card-shadow mt-3 p-3">
				<div class="h3"> {{ __('tatham.your_story_content.clients_header') }} </div>
				<div class="ml-3 mr-3"> {!! __('tatham.your_story_content.clients_content') !!} </div>
			</div>
		</div>
	@include('tatham._testimonial_carousel')

@endsection
