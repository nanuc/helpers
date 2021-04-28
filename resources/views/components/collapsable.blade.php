<div {{ $attributes }}>
    <div class="relative" x-data="{opened: false}">
        <div class="flex items-center justify-between w-full hover:text-gray-700 cursor-pointer" @click="opened = !opened" >
            <span class="font-bold">{{ $caption }}</span>
            <x-heroicon-o-chevron-up x-show="opened" class="w-5 h-5 text-gray-500 " />
            <x-heroicon-o-chevron-down x-show="!opened" class="w-5 h-5 text-gray-500 " />
        </div>

        <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="opened ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
            {{ $slot }}
        </div>
    </div>
</div>


