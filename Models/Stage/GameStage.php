<?php

class GameStage extends Model
{
    use IsStage;

    /** @var ?Archer */
    protected $archer;

    /** @var ?Score */
    protected $score;

    /*
     * Renderable
     */
    public function getPositionX(): float
    {
        return Dimensions::stageX;
    }

    public function getPositionY(): float
    {
        return Dimensions::stageY;
    }

    public function getWidth(): float
    {
        return Dimensions::stageWidth;
    }

    public function getHeight(): float
    {
        return Dimensions::stageHeight;
    }

    public function getZIndex(): int
    {
        return ZIndices::stage;
    }

    /*
     * Accessors & Mutators
     */
    public function setArcher(Archer $archer): void
    {
        $this->archer = $archer;
    }

    public function setScore(Score $score): void
    {
        $this->score = $score;
    }

    public function getScore(): ?Score
    {
        return $this->score;
    }
}
