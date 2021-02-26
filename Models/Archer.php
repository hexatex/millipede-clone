<?php

class Archer extends Model implements Renderable
{
    use IsRenderable;

    /*
     * Renderable
     */
    public function getZIndex(): int
    {
        return ZIndices::groundLevel;
    }

    /*
     * Public
     */
    public function resetPosition()
    {
        $this->positionX = Positions::archer_start[0];
        $this->positionX = Positions::archer_start[1];
    }
}
