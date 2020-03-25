@extends('layouts.app')

@section('content')
    <div>
      @include ('posts/_search_form')

      <div class="d-flex justify-content-center">
        <div class="p-2">
          @if (request()->has('q'))
            <div class="h2">{{ trans_choice('posts.search_results', $posts->count(), ['query' => request()->input('q')]) }}</div>
          @else
            <!-- <div class="h2">@lang('posts.last_posts')</div> -->
          @endif
        </div>

        <!-- <div class="p-2">
          <a href="{{ route('posts.feed') }}" class="pull-right" data-turbolinks="false">
              <i class="fa fa-rss" aria-hidden="true"></i>
          </a>
        </div> -->
      </div>

      @include ('posts/_list')
    </div>
@endsection
