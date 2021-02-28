<?php

class DemoStageService
{
    private $levelService;

    public function __construct(LevelService $levelService)
    {
        $this->levelService = $levelService;
    }

    /**
     * @return DemoStage[]
     */
    public function index(): array
    {
        $dragonflyStage = $this->get(new Dragonfly);
        $earwigStage = $this->get(new Earwig);
        $inchwormStage = $this->get(new Inchworm);
        $deetBombStage = $this->get(new DeetBomb);
        $growthStage = $this->get();
        $millipedeStage = $this->get(new Dragonfly);
        $mosquitoStage = $this->get(new Dragonfly);
        $beeStage = $this->get(new Dragonfly);
        $beetleStage = $this->get(new Dragonfly);
        $spiderStage = $this->get(new Dragonfly);

        return [
            $dragonflyStage,
            $earwigStage,
            $inchwormStage,
            $deetBombStage,
            $growthStage,
            $millipedeStage,
            $mosquitoStage,
            $beeStage,
            $beetleStage,
            $spiderStage,
        ];
    }

    /*
     * Private
     */
    private function get(Character $character = null)
    {
        $level = $this->demoLevel($character);
        $demoStage = new DemoStage;
        $demoStage->setLevel($level);
        $demoStage->onLevelCompletion(function (Event $event, Contracts\Level $previousLevel) use ($demoStage, $character) {
            unset($previousLevel);

            $level = $this->demoLevel($character);

            $demoStage->setLevel($level);
            $demoStage->start();
        });
    }

    private function demoLevel(Character $character = null)
    {
        return $character
            ? $this->levelService->getDemoLevel(clone $character)
            : $this->levelService->getDemoLevel();
    }
}
