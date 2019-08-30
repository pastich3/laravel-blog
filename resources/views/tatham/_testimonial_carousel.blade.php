<div class="d-flex justify-content-center">
	<div style="max-width: 600px">
		<div id="testimonialCarousel" style="height: 180px" data-interval="12000" class="mt-3 carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				@foreach (__('tatham.testimonial_content') as $testimony)
					@include('tatham._testimony_carousel_card', [
						'content' => $testimony['content'],
						'person' => $testimony['person'],
						'title' => $testimony['title'],
						'company' => $testimony['company'],
						'bgColor' => 'gray',
						'itemActive' => $loop->first ? 'active' : '',
					])
				@endforeach
			</div>
			<a class="justify-content-start ml-1 carousel-control-prev" style="width: 60px" href="#testimonialCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">{{ __('tatham.carousel_previous') }} </span>
			</a>
			<a class="justify-content-end mr-1 carousel-control-next" style="width: 60px" href="#testimonialCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">{{ __('tatham.carousel_next') }} </span>
			</a>
		</div>
	</div>
</div>
