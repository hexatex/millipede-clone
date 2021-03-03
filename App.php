<?php

use Contracts\Stage;

class App
{
    /** @var ScreenService */
    private $screenService;

    /** @var GameStageService */
    private $stageService;

    /** @var GameStage */
    private $stage;

    /** @var Score */
    private $score;

    public function __construct()
    {
        $this->screenService = new ScreenService;
        $this->stageService = new GameStageService;
        $this->score = new Score;
    }

    public function main(): void
    {
        $screen = $this->screenService->getDemoScreen();
        $this->start(Players::onePlayer);
    }

    private function start(int $players)
    {
        $this->stage = $this->stageService->get($this->score);
        $this->stage->onGameOver(function (Event $event, Contracts\Stage $stage) {
            $event->detach();
        });

        $this->stage->start();
    }
}

$app = new App;
$app->main();
