<div class="d-flex justify-content-center">
	<div style="max-width: 450px">
		<div id="testimonialCarousel" data-interval="12000" class="mt-3 carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				@foreach (__('tatham.testimonial_content') as $testimony)
					@include('tatham._testimony_carousel_card', [
						'content' => $testimony['content'],
						'person' => $testimony['person'],
						'title' => $testimony['title'],
						'company' => $testimony['company'],
						'bgColor' => '#E1E1E1',
						'itemActive' => $loop->first ? 'active' : '',
					])
				@endforeach
			</div>
			<a class="justify-content-start carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
				<span style="color: #3b869b; background-image: none; font-size: 22px" class="fa fa-chevron-left carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">{{ __('tatham.carousel_previous') }} </span>
			</a>
			<a class="justify-content-end carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
				<span style="color: #3b869b; background-image: none; font-size: 22px" class="fa fa-chevron-right carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">{{ __('tatham.carousel_next') }} </span>
			</a>
		</div>
	</div>
</div>
