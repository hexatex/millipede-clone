<?php

class SwarmService
{
    /**
     * @param Level $previousLevel
     * @return Swarm[]
     */
    public function index(Contracts\Level $previousLevel): array
    {
        $swarm = new Swarm;
        $swarm->byPreviousLevel($previousLevel);

        return $swarm->get();
    }
}
