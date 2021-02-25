<?php

class StageService
{
    /** @var Stage */
    private $stage;

    public function get(): Stage
    {
        if (!$this->stage) {
            $this->stage = new Stage;
        }

        return $this->stage;
    }
}
