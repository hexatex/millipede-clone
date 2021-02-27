<?php

trait IsCharacter
{
    use IsRenderable;

    /** @var int */
    protected $remaining = 1;

    public function getRemaining(): int
    {
        return $this->remaining;
    }
}
