<?php

class ScreenService
{
    private $demoStageService;

    public function __construct()
    {
        $this->demoStageService = new DemoStageService;
    }

    public function getDemoScreen(): DemoScreen
    {
        $screen = new DemoScreen;

        foreach ($this->demoStageService->index() as $demoStage) {
            $screen->addStage($demoStage);
        }

        return $screen;
    }
}
