<?php

class Bee extends Character
{
    /** @var int */
    protected $remaining = 2;

    /*
     * Renderable
     */
    public function getZIndex(): int
    {
        return ZIndices::flying;
    }
}
