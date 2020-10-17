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