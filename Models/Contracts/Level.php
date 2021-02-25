<?php

namespace Contracts;

use Character;
use Closure;

interface Level
{
    public function onLevelCompletion(Closure $closure): void;
    public function addCharacter(Character $character): void;
}
