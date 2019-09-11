@extends('layouts.app')

@section('content')
    <div class="justify-content-center d-flex font-weight-bolder huge"> {{ __('tatham.testimonials') }} </div>
    @foreach(__('tatham.testimonial_content') as $testimony)
        <div class="py-3 px-3">
            <div class="px-5">
                <div>
                    {{ $testimony['content']}}
                </div>
                <div class="d-flex justify-content-end font-italic pt-1">
                    {{ $testimony['person'] }}, {{ $testimony['title'] }}
                </div>
                <div class="d-flex justify-content-end font-weight-bold">
                    {{ $testimony['company'] }}
                </div>
            </div>
        </div>
    @endforeach
@endsection