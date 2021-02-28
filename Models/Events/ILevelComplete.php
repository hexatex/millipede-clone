<?php

interface ILevelComplete
{
    public function start(): void;
    public function complete(): void;

    /* Event */
    public function onLevelCompletion(Closure $closure): Event;
}
