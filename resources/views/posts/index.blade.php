@extends('layouts.landing')

@section('content')
  <div style="background-color: rgba(52, 59, 64, 0.9); padding-top:92px"></div>
  <div>
    <div style="padding-top: 5em; padding-left: 2em; padding-right: 2em; padding-bottom: 2em;">
      @include ('posts/_search_form')

      <div class="d-flex justify-content-between">
        <div class="p-2">
          @if (request()->has('q'))
            <div class="h2" style="color:white">{{ trans_choice('posts.search_results', $posts->count(), ['query' => request()->input('q')]) }}</div>
          @else
            <div class="h2" style="color:white">@lang('posts.last_posts')</div>
          @endif
        </div>

        <div class="p-2">
          <a href="{{ route('posts.feed') }}" class="pull-right" data-turbolinks="false">
              <i class="fa fa-rss" aria-hidden="true"></i>
          </a>
        </div>
      </div>

      @include ('posts/_expanded_list')
    </div>
  </div>
@endsection
