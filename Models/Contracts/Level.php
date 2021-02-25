<?php

namespace Contracts;

use Character;
use Closure;
use Event;

interface Level
{
    public function onLevelCompletion(Closure $closure): Event;
    public function addCharacter(Character $character): void;
}
