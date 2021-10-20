<img class="inline-block h-{{ $height ?? 10 }}" id="{{ $id ?? '' }}" src="{{ asset('/images/loading.gif') }}">
@if(isset($label))
    <div class="inline-block h-{{ $height ?? 10 }} text-gray-600">{{ $label }}</div>
@endif
