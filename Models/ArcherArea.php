<?php

class ArcherArea extends Model implements Renderable
{
    use IsRenderable;

    /** @var ?Archer */
    protected $archer;

    /*
     * Renderable
     */
    public function getPositionX(): float
    {
        return Dimensions::stageX;
    }

    public function getPositionY(): float
    {
        return Dimensions::stageHeight - Dimensions::archerAreaHeight;
    }

    public function getWidth(): float
    {
        return Dimensions::stageWidth;
    }

    public function getHeight(): float
    {
        return Dimensions::archerAreaHeight;
    }

    public function getZIndex(): int
    {
        return ZIndices::stage;
    }

    /*
     * Mutators & Accessors
     */
    public function setArcher(Archer $archer): void
    {
        $this->archer = $archer;
    }
}
