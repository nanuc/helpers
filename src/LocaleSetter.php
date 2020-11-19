<?php

namespace Nanuc\Helpers;

use Illuminate\Support\Arr;

class LocaleSetter
{
    protected $mapping = [
        'de' => 'de_DE',
    ];

    protected function map($locale)
    {
        return Arr::get($this->mapping, $locale);
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
