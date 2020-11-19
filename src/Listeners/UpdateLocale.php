<?php

namespace Nanuc\Helpers\Listeners;

use Illuminate\Foundation\Events\LocaleUpdated;
use Nanuc\Helpers\LocaleSetter;

class UpdateLocale
{
    public function handle(LocaleUpdated $event)
    {
        LocaleSetter::make()->setLocale($event->locale);
    }
}
