<?php

namespace App\Providers;

use App\Events\Guts;
use App\Models\CapturedEvents;
use App\PHPUnitListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Event\Facade;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Facade::instance()->registerSubscriber(new PHPUnitListener);
    }
}
