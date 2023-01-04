@props(['width' => 'lg', 'header', 'type' => 'icon', 'passcode' => null])

<x-app-ui::modal :width="$width" x-data="{ enabled: false, name: '', passcode: '{{ $passcode }}' }">
    <x-slot name="trigger">
        @if($type == 'icon')
            <x-app-ui::icon-button color="primary" icon="heroicon-o-trash" x-on:click="open = true"/>
        @elseif($type == 'link')
            <x-app-ui::link x-on:click="open = true">{{ __('Delete') }}</x-app-ui::link>
        @elseif($type == 'textWithIcon')
            <x-app-ui::button icon="heroicon-o-trash" color="secondary" x-on:click="open = true">{{ __('Delete') }}</x-app-ui::button>
        @endif
    </x-slot>

    <x-slot name="heading">
        {{ $header ?? __('Are you sure?') }}
    </x-slot>

    <x-slot name="subheading">
        {{ $slot }}

        @if($passcode)
            <x-app-ui::input class="mt-2" x-model="name"></x-app-ui::input>
        @endif
    </x-slot>

    <x-slot name="footer">
        <input type="hidden" id="passcode" value="{{ $passcode }}"/>
        <x-app-ui::modal.actions full-width>
            <x-app-ui::button x-on:click="open = false" color="secondary">
                {{ __('Cancel') }}
            </x-app-ui::button>

            <x-app-ui::button x-show="name == document.getElementById('passcode').value" color="danger" x-on:click="open = false" wire:click="{{ $deleteAction ?? 'delete' }}">
                {{ __('Delete') }}
            </x-app-ui::button>

            <x-helpers::buttons.disabled-button x-show="name != document.getElementById('passcode').value">
                {{ __('Delete') }}
            </x-helpers::buttons.disabled-button>
        </x-app-ui::modal.actions>
    </x-slot>
</x-app-ui::modal>
