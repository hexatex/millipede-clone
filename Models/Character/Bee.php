<?php

class Bee extends Character
{
    /** @var int */
    protected $remaining = 2; // Todo: The trait does not have access to this :'( Might need an abstract Character

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
