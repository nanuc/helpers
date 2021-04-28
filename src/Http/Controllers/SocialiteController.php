<?php

namespace Nanuc\Helpers\Http\Controllers;

use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController
{
    const PASSWORD_DUMMY_NO_ONE_CAN_LOGIN_WITH = 'dummy';

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->user();

            $userModel = config('auth.providers.users.model');

            $user = $userModel::firstWhere('email', $socialiteUser->getEmail());

            if (!$user) {
                $password = Str::random(200);

                $user = (new \App\Actions\Fortify\CreateNewUser)->create([
                    'email'              => $socialiteUser->getEmail(),
                    'name'               => $socialiteUser->getName(),
                    'password'           => $password,
                    'password_confirmed' => $password,
                    'terms'              => true,
                ]);
            }

            auth()->login($user);

            return redirect()->route(config('helpers.socialite.redirect-to'));

        } catch (\Throwable $e) {
            report($e);
            abort(401);
        }

    }
}
