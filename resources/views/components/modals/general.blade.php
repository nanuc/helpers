@props(['type' => 'button', 'icon', 'width' => 'lg', 'caption', 'heading', 'buttonSize' => 'md', 'triggerButtonColor' => 'secondary', 'actionButtonText' => null, 'action', 'closeButtonText' => __('Close')])

<x-app-ui::modal :width="$width">
    <x-slot name="trigger">
        @if($type == 'icon')
            <x-app-ui::icon-button color="primary" :icon="$icon" x-on:click="open = true"/>
        @elseif($type == 'link')
            <x-app-ui::link x-on:click="open = true">{{ __('Delete') }}</x-app-ui::link>
        @elseif($type == 'button')
            <x-app-ui::button x-on:click="open = true" :size="$buttonSize" :color="$triggerButtonColor">
                {{ $caption }}
            </x-app-ui::button>
        @endif
    </x-slot>

    <x-slot name="heading">
        {{ $heading ?? $caption }}
    </x-slot>

    {{ $slot }}

    <x-slot name="footer">
        <x-app-ui::modal.actions full-width>
            <x-app-ui::button x-on:click="open = false" color="secondary">
                {{ $closeButtonText }}
            </x-app-ui::button>

            @if($actionButtonText)
                <x-app-ui::button color="primary" x-on:click="open = false" wire:click="{{ $action }}">
                    {{ $actionButtonText }}
                </x-app-ui::button>
            @endif
        </x-app-ui::modal.actions>
    </x-slot>
</x-app-ui::modal>