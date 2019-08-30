@extends('layouts.app')

@section('content')
    <div class="justify-content-center d-flex font-weight-bolder huge"> {{ __('tatham.our_story') }} </div>
        <div class="justify-content-center d-flex huge"> {{ __('tatham.our_story_content.about_bootcamp_mega_header') }} </div>
            <h3> {{ __('tatham.our_story_content.what_boot_camp_does_header') }} </h3>
                <div class="ml-5 mr-5"> {!! __('tatham.our_story_content.what_boot_camp_does_content') !!} </div>
            <h3> {{ __('tatham.our_story_content.how_bootcamp_works_header') }} </h3>
                <div class="ml-5 mr-5"> {!! __('tatham.our_story_content.how_bootcamp_works_content') !!} </div>
        <div class="justify-content-center d-flex huge"> {{ __('tatham.our_story_content.leadership_mega_header') }} </div>
            <h3> {{ __('tatham.our_story_content.michael_tatham_header') }} </h3>
                <div class="ml-5 mr-5">
                    <div class="float-right m-2">
                        <img src="{{ asset('images/pres2.jpg')}}">
                    </div>
                    {!! __('tatham.our_story_content.michael_tatham_content') !!}
                </div>
            <h3> {{ __('tatham.our_story_content.laurie_clarke_header') }} </h3>
                <div class="ml-5 mr-5"> {!! __('tatham.our_story_content.laurie_clarke_content') !!} </div>
        <div class="justify-content-center d-flex huge"> {{ __('tatham.our_story_content.client_results_mega_header') }} </div>
        @foreach(__('tatham.our_story_content.client_results_array') as $clientResults)
            <div class="ml-5 mr-5 mt-2">
                <span class="font-weight-bolder"> {{ $clientResults['name'] }} </span>
                <span> {{ $clientResults['content'] }} </span>
            </div>
        @endforeach
@endsection
