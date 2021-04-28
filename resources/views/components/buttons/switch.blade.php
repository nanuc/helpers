@props(['color' => 'gray-400', 'options', 'model'])
<span class="relative z-0 inline-flex shadow-sm rounded-md">
    @foreach($options as $key => $option)
        <button wire:click="$set('{{ $model }}', '{{ $key }}')" type="button" class="{{ !$loop->first ? '-ml-px' :  '' }} {{ $loop->first ? 'rounded-l-md' : '' }} {{ $loop->last ? 'rounded-r-md' : '' }} {{ $currentValue== $key ? 'bg-' . $color . ' text-white font-black' : 'bg-white hover:bg-gray-50 text-gray-700' }} relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium focus:z-10 focus:outline-none">
            {{ $option }}
        </button>
    @endforeach
</span>
