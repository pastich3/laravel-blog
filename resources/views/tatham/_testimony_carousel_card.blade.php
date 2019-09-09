<div style="padding-left: 4em; padding-right: 4em" class="py-3 carousel-item {{$itemActive ?? ''}}">
	<!-- <div class="px-5 d-flex flex-fill flex-column"> -->
		<div class="d-flex justify-content-center align-items-center" style="margin-bottom: 20px">
			<span style="max-width: 800px">
			{!! $content !!}
			</span>
		</div>
		<div style="position: absolute; bottom: 0.75em; right: 4.75em;" class="d-flex align-items-end justify-content-end flex-column">
			<div style="font-size: 0.65em;" class="d-flex font-italic justify-content-end">
				{{ $person }}, {{ $title }}
			</div>
			<div class="d-flex justify-content-end font-weight-bold">
				{{ $company }}
			</div>
		</div>
	<!-- </div> -->
</div>
