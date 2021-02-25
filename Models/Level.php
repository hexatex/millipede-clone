<?php

class Level extends Model implements Contracts\Level
{
    /** @var Closure */
    protected $_onLevelCompletion;

    public function onLevelCompletion(Closure $closure)
    {
        $this->_onLevelCompletion = $closure;
    }

    public function addCharacter(Character $character)
    {

    }
}
