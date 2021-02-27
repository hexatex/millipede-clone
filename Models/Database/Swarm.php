<?php

class Swarm extends DBModel implements \Contracts\Swarm
{
    use IsSwarm;

    /*
     * Scopes
     */
    public function byPreviousLevel(Level $level)
    {
        // todo: implement DBModel
    }
}
