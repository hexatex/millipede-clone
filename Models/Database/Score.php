<?php

class Score extends DBModel
{
    /** @var int */
    protected $points = 0;

    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function incrementPoints(int $points)
    {
        $this->points = $this->points + $points;
    }
}
