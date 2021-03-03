<?php

class Archer extends Renderable
{
    /** @var float */
    protected $positionX = Positions::archer_start[0];

    /** @var float */
    protected $positionY = Positions::archer_start[1];

    public function resetPosition(): void
    {
        $this->positionX = Positions::archer_start[0];
        $this->positionY = Positions::archer_start[1];
    }
}
