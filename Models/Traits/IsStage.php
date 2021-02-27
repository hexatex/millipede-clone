<?php

trait IsStage
{
    use IsRenderable, HasEvents;

    public function setLevel(Contracts\Level $level): void
    {
        $this->level = $level;
    }

    public function getLevel(): ?Contracts\Level
    {
        return $this->level;
    }

    /*
     * Public
     */
    public function start(): void
    {
        // Todo: do something
    }

    /*
     * Events
     */
    public function onLevelCompletion(Closure $closure): Event
    {
        return $this->on('level-completion', $closure);
    }
}
