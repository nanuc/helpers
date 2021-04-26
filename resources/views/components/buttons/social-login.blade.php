<?php
$color = [
    'google' => 'red',
    'facebook' => 'blue'
][$provider];
?>
<a href="{{ route('socialite.redirect', ['provider' => $provider]) }}" class="w-full block cursor-pointer">
    <div class="mt-2 w-full inline-flex items-center px-4 py-2 bg-{{ $color }}-800 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-{{ $color }}-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
        <x-dynamic-component :component="'si-' . $provider" class="w-10 mr-4" />
        {{ __('Login with :provider', ['provider' => $provider]) }}
    </div>
</a>