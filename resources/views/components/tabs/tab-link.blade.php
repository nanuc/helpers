@if($type == 'underline')
    <button
        :class="{ 'border-blue-700 text-blue-700 focus:text-blue-800 focus:border-blue-700': tab === '{{ $id }}' }"
        class="tab-link mr-8 whitespace-no-wrap py-2 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300"
        @click="tab = '{{ $id }}'"
        x-on:load-tab.window="if($event.detail.tab == '{{ $id }}') { tab =  '{{ $id }}'}; "
        @if($onclick) onclick="{{ $onclick }}" @endif
        {{ $title }}
    </button>
@elseif($type == 'icon')
    <button
        :class="{ 'tabs-icon-active': tab === '{{ $id }}' }"
        class="tab-link tabs-icon"
        @click="tab = '{{ $id }}'"
        title="{{ $title }}"
        x-on:load-tab.window="if($event.detail.tab == '{{ $id }}') { tab =  '{{ $id }}'}"
        @if($onclick) onclick="{{ $onclick }}" @endif
        <i class="{{ $icon }}"></i>
    </button>
@elseif($type == 'pills')
    <button
        :class="{ 'text-blue-700 bg-blue-100 focus:text-blue-800 focus:bg-blue-200': tab === '{{ $id }}' }"
        class="tab-link focus:outline-none mr-2 px-2 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-blue-600 focus:bg-blue-50"
        @click="tab = '{{ $id }}'"
        x-on:load-tab.window="if($event.detail.tab == '{{ $id }}') { tab =  '{{ $id }}'}"
        @if($onclick) onclick="{{ $onclick }}" @endif
        {{ $title }}
    </button>
@elseif($type == 'pills-sm')
    <button
        :class="{ 'text-blue-700 bg-blue-100 focus:text-blue-800 focus:bg-blue-200': tab === '{{ $id }}' }"
        class="tab-link focus:outline-none mr-2 px-1 py-1 font-sm text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-blue-600 focus:bg-blue-50"
        @click="tab = '{{ $id }}'"
        x-on:load-tab.window="if($event.detail.tab == '{{ $id }}') { tab =  '{{ $id }}'}"
        @if($onclick) onclick="{{ $onclick }}" @endif
        {{ $title }}
    </button>
@endif
