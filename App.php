<?php

class App
{
    /** @var StageService */
    private $stageService;
    /** @var LevelService */
    private $levelService;

    /** @var Stage */
    private $stage;

    private $points;

    public function __construct()
    {
        $this->stageService = new StageService;
        $this->levelService = new LevelService;

        $this->stage = $this->stageService->get();
    }

    public function main()
    {
        $firstLevel = $this->levelService->get();
        $firstLevel->onLevelCompletion(function (Contracts\Level $previousLevel) {
            $nextLevel = $this->levelService->get($previousLevel);
            $this->stage->setLevel($nextLevel);
        });

        $this->stage->setLevel($firstLevel);
    }
}

$app = new App;
$app->main();
