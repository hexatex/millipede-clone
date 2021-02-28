<?php

class ScreenService
{
    public function getDemoScreen(): DemoScreen
    {
        $screen = new DemoScreen;
        $screen->addStage($stage);
    }
}
