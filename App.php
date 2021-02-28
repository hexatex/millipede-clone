<?php

class App
{
    /** @var GameStageService */
    private $stageService;

    /** @var GameStage */
    private $stage;

    /** @var Score */
    private $score;

    public function __construct()
    {
        $this->stageService = new GameStageService;
        $this->score = new Score;
        $this->stage = $this->stageService->get($this->score);
    }

    public function main(): void
    {
        $this->stage->start();
    }
}

$app = new App;
$app->main();
