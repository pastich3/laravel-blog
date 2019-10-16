<div style="padding-left: 4em; padding-right: 4em; max-width: 750px" class="py-3 carousel-item {{$itemActive ?? ''}}">
	<div class="carousel-item-inner d-flex w-100 h-100 flex-column align-items-center justify-content-center">
	<!-- <div class="px-5 d-flex flex-fill flex-column"> -->
		<div class="d-flex ml-4 justify-content-center align-items-center" style="margin-bottom: 20px">
			<span>
			{!! $content !!}
			</span>
		</div>
		<div class="w-100 d-flex align-items-end justify-content-end flex-column">
			<div style="font-size: 0.65em;" class="d-flex font-italic justify-content-end">
				{{ $person }}, {{ $title }}
			</div>
			<div class="d-flex justify-content-end font-weight-bold">
				{{ $company }}
			</div>
		</div>
	</div>
	<!-- </div> -->
</div>
