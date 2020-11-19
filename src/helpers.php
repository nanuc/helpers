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
        $datetimeString = utf8_encode(strftime(trans('datetime.locale.'.$format), strtotime($date)));

        return $entitites ? htmlentities($datetimeString) : $datetimeString;
    }
}