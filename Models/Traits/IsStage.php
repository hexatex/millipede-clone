<?php

trait IsStage
{
    use LevelComplete;

    /** @var Contracts\Level */
    protected $level;

    public function setLevel(Contracts\Level $level): void
    {
        $this->level = $level;
        $this->level->onLevelCompletion(function (Event $event, Contracts\Level $previousLevel) {
            $event->detach();
            $this->complete();
        });
    }

    public function getLevel(): ?Contracts\Level
    {
        return $this->level;
    }

    /*
     * Public
     */
    public function gameOver(): void
    {
        $this->detach('level-completion');
        $this->trigger('game-over');
    }

    /*
     * Events
     */
    public function onGameOver(Closure $closure): Event
    {
        return $this->on('game-over', $closure);
    }
}
