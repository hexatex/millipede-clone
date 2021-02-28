<?php

trait LevelComplete
{
    abstract protected function on(string $eventCode, Closure $closure, Closure $returnParams = null): Event;

    /**
     * @return mixed|void
     * @param string $eventCode
     * @return mixed
     */
    abstract protected function trigger(string $eventCode);

    /*
     * Public
     */
    public function start(): void
    {
        // Todo: do something
    }

    public function complete(): void
    {
        $this->trigger('level-completion');
    }

    /*
     * Events
     */
    public function onLevelCompletion(Closure $closure): Event
    {
        return $this->on('level-completion', $closure);
    }
}
