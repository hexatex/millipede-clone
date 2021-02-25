<?php

class Score extends DBModel
{
    /** @var int */
    protected $score = 0;

    public function setScore(int $score): void
    {
        $this->score = $score;
    }
}
