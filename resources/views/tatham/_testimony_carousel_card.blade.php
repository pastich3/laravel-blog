<div style="background-color: {{ $bgColor }}; height: 200px" class="py-3 px-3 carousel-item {{$itemActive ?? ''}}">
	<div class="px-5">
		<div class="d-flex justify-content-center" style="height: 100px; margin-bottom: 20px">
			<span style="max-width: 450px">
			@php $maxLen = 200; @endphp
			{!! strlen($content) > $maxLen ? implode(' ', array_slice(explode(' ', rtrim(substr($content, 0, $maxLen), ",. ")), 0, -1)) . ' ...' : $content !!}
			</span>
		</div>
		<div style="font-size: 0.65em;" class="d-flex font-italic justify-content-end">
			{{ $person }}, {{ $title }}
		</div>
		<div class="d-flex justify-content-end font-weight-bold">
			{{ $company }}
		</div>
	</div>
</div>
