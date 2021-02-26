<?php

trait HasEvents
{
    /** @var Event[] */
    protected $events = [];

    protected function on(string $eventCode, Closure $closure, Closure $returnParams = null): Event
    {
        $event = new Event;
        $event->setOn(function () use ($event, $closure, $returnParams) {
            if ($returnParams) {
                return $closure($event, (array)$returnParams());
            }

            return $closure($event, $this);
        });

        $event->setDetach(function () use ($eventCode, $event) {
            unset($this->events[$eventCode][$event->getCode()]);
        });

        $this->events[$eventCode][$event->getCode()] = $closure;
    }
}
