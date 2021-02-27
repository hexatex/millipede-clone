<?php

trait IsScreen
{
    use IsRenderable;

    /** @var GameStage[] */
    protected $stages = [];

    /**
     * @param GameStage $stage
     */
    public function addStage(GameStage $stage): void
    {
        array_push($this->stages, $stage);
    }
}
