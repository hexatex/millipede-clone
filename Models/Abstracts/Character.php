<?php

abstract class Character extends Renderable
{
    /** @var int */
    protected $remaining = 1;

    public function getRemaining(): int
    {
        return $this->remaining;
    }
}
