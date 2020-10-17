<div
    x-data="{ tab: '{{ $activeElement }}' }">

    <div class="border-b border-gray-200 mb-2">
        {{ $links }}
    </div>

    {{$slot}}
</div>


