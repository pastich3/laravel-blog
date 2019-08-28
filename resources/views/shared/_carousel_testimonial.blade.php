<div style="background-color: {{ $bgColor }}; height: 180px" class="py-3 px-3 carousel-item {{$itemActive ?? ''}}">
	<div class="px-5">
		<div style="height: 100px">
			@php $maxLen = 140; @endphp
			{{ strlen($content) > $maxLen ? implode(' ', array_slice(explode(' ', substr($content, 0, $maxLen)), 0, -1)) . ' ...' : $content }}
		</div>
		<div style="font-size: 0.75em" class="d-flex justify-content-end">
			{{ $person }}, {{ $title }}
		</div>
		<div class="d-flex justify-content-end lead">
			{{ $company }}
		</div>
	</div>
</div>