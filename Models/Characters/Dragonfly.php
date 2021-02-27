<?php

class Dragonfly extends Model implements Character
{
    use IsCharacter;

    /*
     * Renderable
     */
    public function getZIndex(): int
    {
        return ZIndices::flying;
    }
}
