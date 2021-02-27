<?php

class Mushroom implements Character
{
    use IsCharacter;

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
