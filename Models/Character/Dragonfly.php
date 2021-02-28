<?php

class Dragonfly extends Character
{
    /*
     * Renderable
     */
    public function getZIndex(): int
    {
        return ZIndices::flying;
    }
}
