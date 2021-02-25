<?php

class LevelService
{
    public function get(Contracts\Level $previousLevel = null)
    {
        $level = new Level;

        if (!$previousLevel) {

        }

        return $level;
    }
}
