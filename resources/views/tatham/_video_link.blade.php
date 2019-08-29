<a class="btn btn-secondary p-1 mr-1 mt-1" href="#wistia_{{ $video_code }}" style="font-size: 0.75em; width:160px; background-color: white; border: none">
    <img src="{{ asset('images/' . $previewImage)}}" style="width: 138px; height: 78px">
    <div class="text-decoration-none text-body"> "{{ $description }}" </div>
    <span style="color: #3273dc"> <i class="fa fa-play"></i> Play video ({{ $videoLength }}) </span>
</a>
