<?php

class StageService
{
    protected $archerService;

    public function __construct()
    {
        $this->archerService = new ArcherService;
    }

    public function get(Score $score): GameStage
    {
        $archer = $this->archerService->get();

        $stage = new GameStage;
        $stage->setScore($score);
        $stage->setArcher($archer);

        return $stage;
    }
}
