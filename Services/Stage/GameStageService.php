<?php

class GameStageService
{
    /** @var ArcherAreaService */
    protected $archerAreaService;

    /** @var LevelService */
    protected $levelService;

    public function __construct()
    {
        $this->archerAreaService = new ArcherAreaService;
        $this->levelService = new LevelService;
    }

    public function get(Score $score): GameStage
    {
        $archerArea = $this->archerAreaService->get();
        $firstLevel = $this->levelService->get($score);

        $stage = new GameStage;
        $stage->setScore($score);
        $stage->setArcherArea($archerArea);
        $stage->setLevel($firstLevel);
        $stage->onLevelCompletion(function (Event $event, Contracts\Level $previousLevel) use ($score, $stage) {
            $nextLevel = $this->levelService->get($score, $previousLevel);
            $stage->setLevel($nextLevel);
        });

        return $stage;
    }
}
