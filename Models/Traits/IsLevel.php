<?php

trait IsLevel
{
    /** @var array */
    protected $characters = [];

    abstract protected function on(string $eventCode, Closure $closure, Closure $returnParams = null): Event;

    public function onLevelCompletion(Closure $closure): Event
    {
        return $this->on('level-completion', $closure);
   }

    public function addCharacter(Character $character): void
    {
        array_push($this->characters, $character);
    }
}
