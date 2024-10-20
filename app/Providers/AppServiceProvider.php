<?php

namespace App\Providers;

use App\Events\Guts;
use App\Models\CapturedEvents;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Event::listen('*', function ($eventName, $data) {
            if(! collect(['Illuminate\Log\Events\MessageLogged'])->contains($eventName))
            info($eventName);
        });
    }
}
