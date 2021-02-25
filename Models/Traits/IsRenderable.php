<?php

trait IsRenderable
{
    /** @var float */
    protected $positionX;

    /** @var float */
    protected $positionY;

    public function getPositionX(): float
    {
        return $this->positionX;
    }

    public function setPositionX(float $positionX): void
    {
        $this->positionX = $positionX;
    }

    public function getPositionY(): float
    {
        return $this->positionY;
    }

    public function setPositionY(float $positionY): void
    {
        $this->positionY = $positionY;
    }
}
