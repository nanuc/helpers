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

if (! function_exists('datetime')) {
    /**
     * Format a date.
     *
     * @param $format
     * @param string $date
     * @param bool $entitites
     * @return bool|string
     */
    function datetime($format, $date = 'now', $entitites = true)
    {
        $datetimeString = strftime(trans('helpers::datetime.' . $format), strtotime($date));

        return $entitites ? htmlentities($datetimeString) : $datetimeString;

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

if (! function_exists('userHasTeamRole')) {
    /**
     * Check if the current user has a given role in the current team.
     *
     * @return boolean
     *
     */
    function userHasTeamRole($roles)
    {
        if($team = currentTeam()) {
            foreach(\Illuminate\Support\Arr::wrap($roles) as $role) {
                if(auth()->user()->hasTeamRole($team, $role)) {
                    return true;
                }
            }
        }

        return false;
    }
}