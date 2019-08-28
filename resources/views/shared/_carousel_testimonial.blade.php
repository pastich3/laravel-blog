<div style="background-color: {{ $bgColor }}" class="px-5 py-3 carousel-item {{$itemActive ?? ''}}">
	<div>
		<div class="px-5">
			{{ $content }}
		</div>
		<div class="pt-2 px-5 d-flex justify-content-end">
			{{ $person }}
		</div>
		<div class="px-5 d-flex justify-content-end lead">
			{{ $company }}
		</div>
	</div>
</div>