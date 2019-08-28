<div style="background-color: {{ $bgColor }}; height: 180px;" class="py-3 px-3 carousel-item {{$itemActive ?? ''}}">
	<div class="px-5">
		<div class="d-flex justify-content-center" style="height: 100px;">
			<span style="max-width: 450px">
			@php $maxLen = 140; @endphp
			{{ strlen($content) > $maxLen ? implode(' ', array_slice(explode(' ', substr($content, 0, $maxLen)), 0, -1)) . ' ...' : $content }}
			</span>
		</div>
		<div style="font-size: 0.75em; overflow-x: hidden" class="d-flex justify-content-end">
			{{ $person }}, {{ $title }}
		</div>
		<div class="d-flex justify-content-end font-weight-bold">
			{{ $company }}
		</div>
	</div>
</div>