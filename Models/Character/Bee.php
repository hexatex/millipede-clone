<?php

class Bee extends Model implements Character
{
    use IsCharacter;

    /** @var int */
    protected $remaining = 2;

    /*
     * Character
     */
    public function getRemaining(): int
    {
        return $this->remaining;
    }

    /*
     * Renderable
     */
    public function getZIndex(): int
    {
        return ZIndices::flying;
    }
}
