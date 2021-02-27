<?php

trait IsSwarm
{
    /** Character[]  */
    protected $characters = [];

    public function addCharacter(Character $character): void
    {
        array_push($this->characters, $character);
    }
}
