<?php

class Archer extends Model implements Renderable
{
    use IsRenderable;

    public function resetPosition()
    {
        $this->positionX = Positions::archer_start[0];
        $this->positionY = Positions::archer_start[1];
    }
}
