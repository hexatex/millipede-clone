<?php

namespace Contracts;

use Closure;

interface HasEvents
{
    public function on(string $eventCode, Closure $closure, Closure $returnParams = null): Event;
    public function trigger(string $eventCode);
}
