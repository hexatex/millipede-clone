<?php

trait IsRenderable
{
    /** @var float */
    protected $positionX = 0;

    /** @var float */
    protected $positionY = 0;

    /** @var float */
    protected $height = 0;

    /** @var float */
    protected $width = 0;

    protected $zIndex = ZIndices::groundLevel;

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

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getZIndex(): int
    {
        return $this->zIndex;
    }

    public function setZIndex(int $zIndex): void
    {
        $this->zIndex = $zIndex;
    }
}
