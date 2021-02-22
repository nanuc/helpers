<?php

namespace Nanuc\Helpers;

use Illuminate\Support\Arr;

class LocaleSetter
{
    protected function map($locale)
    {
        return Arr::get(config('helpers.locale-setter.mapping'), $locale);
    }

    public function setLocale($locale)
    {
        setlocale(LC_ALL, $this->map($locale));
    }

    public static function make()
    {
        return new static;
    }
}
