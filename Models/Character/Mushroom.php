<?php

class Mushroom implements Character
{
    use IsCharacter;

    /** @var int */
    protected $remaining = 4;
}
