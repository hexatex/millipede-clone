<?php

use Contracts\Level;

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
        $this->stage->setLevel($firstLevel);
        $this->stage->onLevelCompletion(function (Event $event, Contracts\Level $previousLevel) {
            $nextLevel = $this->levelService->get($this->score, $previousLevel);
            $this->stage->setLevel($nextLevel);
        });

        $this->stage->start();
    }
}

$app = new App;
$app->main();
