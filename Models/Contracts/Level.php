<?php

namespace Contracts;

interface Level
{
    /**
     * @param Swarm[] $swarms
     */
    public function setSwarms(array $swarms): void;
}
