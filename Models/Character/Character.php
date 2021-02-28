<?php

abstract class Character extends Model implements Renderable
{
    use IsRenderable;

    /** @var int */
    protected $remaining = 1;

    public function getRemaining(): int
    {
        return $this->remaining;
    }
}
