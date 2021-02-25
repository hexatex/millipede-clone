<?php

trait IsLevel
{
    /** @var Closure */
    protected $_onLevelCompletion;

    /** @var array */
    protected $characters = [];

    public function onLevelCompletion(Closure $closure): void
    {
        $this->_onLevelCompletion = $closure;
    }

    public function addCharacter(Character $character): void
    {
        array_push($this->characters, $character);
    }
}
