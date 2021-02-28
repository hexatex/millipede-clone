<?php

namespace Contracts;

use ILevelComplete;

interface Level extends ILevelComplete
{
    /**
     * @param Swarm[] $swarms
     */
    public function setSwarms(array $swarms): void;
}
