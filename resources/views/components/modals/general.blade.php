@props(['width' => 'lg', 'caption', 'heading', 'buttonSize' => 'md', 'actionButtonText' => null, 'action', 'closeButtonText' => __('Close')])

<x-app-ui::modal :width="$width">
    <x-slot name="trigger">
        <x-app-ui::button x-on:click="open = true" :size="$buttonSize" color="secondary">
            {{ $caption }}
        </x-app-ui::button>
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
