<?php

interface Renderable
{
    public function getPositionX(): float;
    public function setPositionX(float $positionX): void;
    public function getPositionY(): float;
    public function setPositionY(float $positionY): void;
}
