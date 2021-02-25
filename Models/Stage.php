<?php

class Stage extends Model
{
    /** @var ?Contracts\Level */
    protected $level;

    /** @var ?Score */
    protected $score;

    public function setLevel(Contracts\Level $level): void
    {
        $this->level = $level;
    }

    public function getLevel(): Contracts\Level
    {
        return $this->level;
    }

    public function setScore(Score $score): void
    {
        $this->score = $score;
    }

    public function getScore(): Score
    {
        return $this->score;
    }
}
