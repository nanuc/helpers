<?php

use Nanuc\Helpers\Http\Controllers\SocialiteController;

Route::group(['middleware' => ['web']], function () {
    if (config('helpers.socialite.enabled')) {
        Route::get('auth/{provider}/redirect', [SocialiteController::class, 'redirect'])->name('socialite.redirect');
        Route::get('auth/{provider}/callback', [SocialiteController::class, 'callback']);
    }
});
