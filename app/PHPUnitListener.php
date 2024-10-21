<?php declare(strict_types=1);

namespace App;

use PHPUnit\Event\Test\Finished;
use PHPUnit\Event\Test\FinishedSubscriber;

final class PHPUnitListener implements FinishedSubscriber
{
    public function notify(Finished $event): void
    {
        ray('YEEEEEES!');
    }
}