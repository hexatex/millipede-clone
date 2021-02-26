<?php

interface Renderable
{
    public function getPositionX(): float;
    public function setPositionX(float $positionX): void;
    public function getPositionY(): float;
    public function setPositionY(float $positionY): void;
    public function getWidth(): float;
    public function setWidth(float $width): void;
    public function getHeight(): float;
    public function setHeight(float $height): void;
}
