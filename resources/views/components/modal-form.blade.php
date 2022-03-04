<x-jet-dialog-modal wire:model="{{ $showModel }}">
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="content">
        {{ $slot }}
    </x-slot>

    <x-slot name="footer" >
        <x-jet-secondary-button wire:click="$toggle('{{ $showModel }}')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="saveModal('{{ $showModel }}')" wire:loading.attr="disabled">
            {{ $saveButton ?? 'Save' }}
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
