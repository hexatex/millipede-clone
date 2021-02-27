<?php

namespace Contracts;

use Character;

interface Swarm
{
    public function addCharacter(Character $character): void;
}
