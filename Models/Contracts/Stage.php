<?php

namespace Contracts;

use Closure;
use Event;
use ILevelComplete;
use Renderable;

interface Stage extends Renderable, ILevelComplete
{
    public function setLevel(\Contracts\Level $level): void;
    public function getLevel(): ?\Contracts\Level;

    /* Events */
    public function onLevelCompletion(Closure $closure): Event;
}
