@push('pre-inline-scripts')
    <script charset="ISO-8859-1" src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
@endpush

<div class="d-flex justify-content-center">
    <div class="wistia_embed wistia_async_mtcq0lapdc playlistLinks=auto" style="height:360px;width:640px">&nbsp;</div>
</div>
<div class="d-flex flex-row" style="height: 140px">

    @include('tatham._video_link', [
        'video_code' => 'mtcq0lapdc',
        'previewImage' => 'TathamImagePreview1.jpg',
        'description' => __('tatham.video_descriptions.description_1'),
        'videoLength' => '0:53',
    ])

    @include('tatham._video_link', [
        'video_code' => '0m1a188mf0',
        'previewImage' => 'TathamImagePreview2.jpg',
        'description' => __('tatham.video_descriptions.description_2'),
        'videoLength' => '4:31',
    ])
</div>
