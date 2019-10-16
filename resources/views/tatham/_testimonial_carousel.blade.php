<div class="d-flex justify-content-center">
	<div style="max-width: 800px; width: 85%">
		<div id="testimonialCarousel" data-interval="12000" class="carousel slide d-flex align-items-center" data-ride="carousel">
			<div class="carousel-inner">
				@foreach (__('tatham.testimonial_content') as $testimony)
					@include('tatham._testimony_carousel_card', [
						'content' => $testimony['content'],
						'person' => $testimony['person'],
						'title' => $testimony['title'],
						'company' => $testimony['company'],
						'bgColor' => '#FFFFFF',
						'itemActive' => $loop->first ? 'active' : '',
					])
				@endforeach
			</div>
			<a class="justify-content-start carousel-control-prev" data-target="#testimonialCarousel" href="" role="button" data-slide="prev">
				<span style="color: #008ba1; background-image: none; font-size: 75px; margin-bottom: 55px;" class="fa fa-chevron-circle-left carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">{{ __('tatham.carousel_previous') }} </span>
			</a>
			<a class="justify-content-end carousel-control-next" data-target="#testimonialCarousel" href="" role="button" data-slide="next">
				<span style="color: #008ba1; background-image: none; font-size: 75px; margin-right: 45px; margin-bottom: 55px;" class="fa fa-chevron-circle-right carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">{{ __('tatham.carousel_next') }} </span>
			</a>
		</div>
	</div>
</div>


@push('inline-scripts')
<script>
$(document).ready(function() {
	var items = $('#testimonialCarousel .carousel-item, #testimonialCarousel .carousel-item .carousel-item-inner'), // grab all slides
	    heights = [], // create empty array to store height values
	    tallest; // create variable to make note of the tallest slide

	function carouselNormalization() {
		if (items.length) {
		    normalizeHeights();

		    $(window).on('resize orientationchange', function () {
		        tallest = 0, heights.length = 0; // reset vars
		        items.each(function() {
		            $(this).css('min-height','0'); // reset min-height
		        });
		        normalizeHeights(); // run it again
		    });
		}
	}

	function normalizeHeights() {
        items.each(function() { // add heights to array
            heights.push($(this).height());
        });
        tallest = Math.max.apply(null, heights) + 64; // cache largest value
        items.each(function() {
            $(this).css('min-height',tallest + 'px');
        });
    };

    carouselNormalization();
});
</script>
@endpush
