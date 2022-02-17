@props(['width' => 'lg', 'caption', 'heading', 'trigger', 'action', 'confirmButtonText' => __('Absolutely!')])

<x-app-ui::modal :width="$width">
    <x-slot name="trigger">
        @if(isset($trigger))
            {{ $trigger }}
        @else
            <x-app-ui::link x-on:click="open = true" class="cursor-pointer">
                {{ $caption }}
            </x-app-ui::link>
        @endif
    </x-slot>

    <x-slot name="heading">
        {{ $caption }}
    </x-slot>

    {{ $slot }}

    <x-slot name="footer">
        <x-app-ui::modal.actions full-width>
            <x-app-ui::button x-on:click="open = false" color="secondary">
                {{ __('Cancel') }}
            </x-app-ui::button>

            <x-app-ui::button color="primary" x-on:click="open = false" wire:click="{{ $action }}">
                {{ $confirmButtonText }}
            </x-app-ui::button>
        </x-app-ui::modal.actions>
    </x-slot>
</x-app-ui::modal>
