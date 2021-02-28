<?php

class Mushroom extends Character
{
    /** @var int */
    protected $remaining = 4;

    /*
     * Character
     */
    public function getRemaining(): int
    {
        return $this->remaining;
    }
}
