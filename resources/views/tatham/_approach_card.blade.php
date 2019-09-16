<div class="wow mb-4 fadeInUp w-100" data-wow-delay="0.2s">
  <div class="box box-shadow">
    <div class="d-flex justify-content-start" style="">
      <div class="truth"> &gt; TRUTH #<span class="number">{{$truth_number}}</span></div>
    </div>
    <h4 class="title d-flex justify-content-start mb-5">{{strtoupper($truth)}}</h4>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
      <div class="w-md-50 mb-3 mb-md-0 d-flex justify-content-center align-items-center px-5" style="max-width: 450px">
        <div class="d-flex justify-content-start">
          <span class="start" style="line-height: 28px; text-align: left;"> {{strtoupper($left_div_text)}} </span>
        </div>
      </div>
      <div style="max-width: 450px; text-align: left;">

        <span class="mb-2 d-flex justify-content-start text-tatham-teal"> {{title_case($list_header)}} </span>
        <ul>
          @foreach($bullet_points as $point)
            <li> {{$point}} </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
