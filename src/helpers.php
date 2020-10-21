<?php

if (! function_exists('l')) {
    /**
     * Quick log.
     *
     * @param  mixed $string
     */
    function l($string)
    {
        \Illuminate\Support\Facades\Log::info($string);
    }
}

if (! function_exists('currentTeam')) {
    /**
     * The current team.
     *
     * @return App\Models\Team
     *
     */
    function currentTeam()
    {
        return optional(auth()->user())->currentTeam;
    }
}