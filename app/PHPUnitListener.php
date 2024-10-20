<?php declare(strict_types=1);

namespace App;

use PHPUnit\Event\TestRunner\ExecutionFinished;
use PHPUnit\Event\TestRunner\ExecutionFinishedSubscriber;

final class PHPUnitListener implements ExecutionFinishedSubscriber
{
    public function notify(ExecutionFinished $event): void
    {
        info(__METHOD__ . PHP_EOL . $this->message . PHP_EOL);
    }
}