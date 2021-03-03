<?php

trait IsScreen
{
    /** @var Contracts\Stage[] */
    protected $stages = [];

    /**
     * @param Contracts\Stage $stage
     */
    public function addStage(Contracts\Stage $stage): void
    {
        array_push($this->stages, $stage);
    }
}
