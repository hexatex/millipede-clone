<?php

class LevelService
{
    private $swarmService;

    public function __construct()
    {
        $this->swarmService = new SwarmService;
    }

    public function get(Score $score, Contracts\Level $previousLevel = null)
    {
        $level = new Level;

        $swarms = $this->swarmService->index($previousLevel ?: $level);

        $level->setSwarms($swarms);

        return $level;
    }
}
