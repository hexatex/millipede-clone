<?php

namespace Contracts;

use Closure;

interface Level
{
    public function onLevelCompletion(Closure $closure);
}
