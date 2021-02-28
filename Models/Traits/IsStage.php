<?php

trait IsStage
{
    use IsRenderable, LevelComplete;

    protected $level;

    public function setLevel(Contracts\Level $level): void
    {
        $this->level = $level;
        $this->level->onLevelCompletion(function (Event $event, Contracts\Level $previousLevel) {
            $this->complete();
        });
    }

    public function getLevel(): ?Contracts\Level
    {
        return $this->level;
    }
}
