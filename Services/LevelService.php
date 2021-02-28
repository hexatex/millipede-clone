<?php

class LevelService
{
    private $swarmService;

    public function __construct()
    {
        $this->swarmService = new SwarmService;
    }

    public function getDemoLevel(Character $character = null)
    {
        $swarm = new Swarm;

        if ($character) {
            $swarm->addCharacter($character);
        }

        $level = new Level;
        $level->setSwarms([$swarm]);

        return $level;
    }

    public function get(Score $score, Contracts\Level $previousLevel = null): Level
    {
        $level = new Level;

        $swarms = $this->swarmService->index($previousLevel ?: $level);
        $level->setSwarms($swarms);

        return $level;
    }
}
