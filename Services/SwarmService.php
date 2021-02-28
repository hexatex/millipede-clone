<?php

class SwarmService
{
    /**
     * @return Swarm[]
     * @param Contracts\Level $previousLevel
     */
    public function index(Contracts\Level $previousLevel): array
    {
        $swarm = new Swarm;
        $swarm->byPreviousLevel($previousLevel);

        return $swarm->get();
    }
}
