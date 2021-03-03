<?php

class DemoStageService
{
    private $levelService;

    public function __construct()
    {
        $this->levelService = new LevelService;
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
        $millipedeStage = $this->get(new Millipede);
        $mosquitoStage = $this->get(new Mosquito);
        $beeStage = $this->get(new Bee);
        $beetleStage = $this->get(new Beetle);
        $spiderStage = $this->get(new Spider);

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

            $level = $this->demoLevel(clone $character);

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
