<?php

namespace Contracts;

use Closure;
use Event;
use Renderable;

interface Stage extends Renderable
{
    public function setLevel(\Contracts\Level $level): void;
    public function getLevel(): ?\Contracts\Level;

    /* Events */
    public function onLevelCompletion(Closure $closure): Event;
}
