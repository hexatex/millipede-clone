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

    /**
     * @return mixed|void
     * @param string $eventCode
     */
    protected function trigger(string $eventCode)
    {
        if (empty($this->events[$eventCode])) {
            return;
        }

        /** @var Event $event */
        foreach ($this->events[$eventCode] as $event) {
            $event->trigger();
        }
    }
}
