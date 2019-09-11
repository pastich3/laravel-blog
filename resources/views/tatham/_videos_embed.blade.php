@push('pre-inline-scripts')
    <script charset="ISO-8859-1" src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
@endpush

<div class="d-flex justify-content-center">
    <div class="d-flex flex-fill wistia_embed wistia_async_mtcq0lapdc playlistLinks=auto"
        style="min-width: 180px; min-height: 320px; max-height:360px; max-width:640px">&nbsp;
    </div>
</div>
<div class="d-flex flex-row flex-wrap pb-1 justify-content-center" style="min-height: 140px">

    @include('tatham._video_link', [
        'video_code' => 'mtcq0lapdc',
        'previewImage' => 'TathamImagePreview2.jpg',
        'description' => __('tatham.video_descriptions.description_5'),
        'videoLength' => '0:53',
    ])

    @include('tatham._video_link', [
        'video_code' => '0m1a188mf0',
        'previewImage' => 'TathamImagePreview1.jpg',
        'description' => __('tatham.video_descriptions.description_1'),
        'videoLength' => '4:31',
    ])

    @include('tatham._video_link', [
        'video_code' => 'ofd8msdy3j',
        'previewImage' => 'TathamImagePreview1.jpg',
        'description' => __('tatham.video_descriptions.description_2'),
        'videoLength' => '2:28',
    ])

    @include('tatham._video_link', [
        'video_code' => '7u0fu8n6fg',
        'previewImage' => 'TathamImagePreview2.jpg',
        'description' => __('tatham.video_descriptions.description_3'),
        'videoLength' => '4:07',
    ])

    @include('tatham._video_link', [
        'video_code' => 'o1h7lqk1wc',
        'previewImage' => 'TathamImagePreview2.jpg',
        'description' => __('tatham.video_descriptions.description_4'),
        'videoLength' => '4:05',
    ])

</div>
