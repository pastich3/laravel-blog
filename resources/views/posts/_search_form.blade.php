<div class="mt-3 d-flex justify-content-center">
    {!! Form::open(['route' => 'blog', 'class' => 'd-flex', 'method' => 'GET']) !!}
      <div class="input-group mr-sm-3">
        {!! Form::text('q', null, ['class' => 'form-control', 'placeholder' => __('posts.search')]) !!}
      </div>

      <button type="submit" class="btn btn-primary">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    {!! Form::close() !!}
</div>
