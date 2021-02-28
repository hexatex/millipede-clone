<?php

trait IsLevel
{
    use IsLevel, LevelComplete;

    /** @var Swarm[] */
    protected $swarms = [];

    /**
     * @param Swarm[] $swarms
     */
    public function setSwarms(array $swarms): void
    {
        $this->swarms = $swarms;
    }
}
