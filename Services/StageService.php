<?php

class StageService
{
    public function get(Score $score): Stage
    {
        $stage = new Stage;
        $stage->setScore($score);

        return $stage;
    }
}
