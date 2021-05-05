<div class="h-10">
    <button wire:click.prevent="$refresh" wire:loading.remove wire:target="$refresh" class="hoverable">
        <x-heroicon-o-refresh class="inline-block w-{{ $width ?? 5 }} h-{{ $height ?? 5 }}" />
    </button>
    <div wire:loading wire:target="$refresh">
        <x-helpers::loading-spinner height="8"/>
    </div>
</div>
