<?php

class App
{
    /** @var StageService */
    private $stageService;

    /** @var LevelService */
    private $levelService;

    /** @var Stage */
    private $stage;

    /** @var Score */
    private $score;

    public function __construct()
    {
        $this->stageService = new StageService;
        $this->levelService = new LevelService;

        $this->score = new Score;
        $this->stage = $this->stageService->get($this->score);
    }

    public function main()
    {
        $firstLevel = $this->levelService->get($this->score);
        $firstLevel->onLevelCompletion(function (Event $event, Contracts\Level $previousLevel) {
            $nextLevel = $this->levelService->get($previousLevel);
            $this->stage->setLevel($nextLevel);
            $event->detach();
        });

        $this->stage->setLevel($firstLevel);
    }
}

$app = new App;
$app->main();
