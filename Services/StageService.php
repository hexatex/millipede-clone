<?php

class StageService
{
    protected $archerService;

    public function __construct()
    {
        $this->archerService = new ArcherService;
    }

    public function get(Score $score): Stage
    {
        $archer = $this->archerService->get();

        $stage = new Stage;
        $stage->setScore($score);
        $stage->setArcher($archer);

        return $stage;
    }
}
