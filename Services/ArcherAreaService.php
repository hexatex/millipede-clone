<?php

class ArcherAreaService
{
    protected $archerService;

    public function __construct()
    {
        $this->archerService = new ArcherService;
    }

    public function get(): ArcherArea
    {
        $archer = $this->archerService->get();

        $archerArea = new ArcherArea;
        $archerArea->setArcher($archer);

        return $archerArea;
    }
}
