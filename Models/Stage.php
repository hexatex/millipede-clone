<?php

class Stage extends Model implements Renderable
{
    use IsRenderable, HasEvents;

    /** @var ?Archer */
    protected $archer;

    /** @var ?Contracts\Level */
    protected $level;

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

    public function setArcher(Archer $archer): void
    {
        $this->archer = $archer;
    }

    public function setLevel(Contracts\Level $level): void
    {
        $this->level = $level;
    }

    public function getLevel(): ?Contracts\Level
    {
        return $this->level;
    }

    public function setScore(Score $score): void
    {
        $this->score = $score;
    }

    public function getScore(): ?Score
    {
        return $this->score;
    }

    /*
     * Public
     */
    public function start(): void
    {
        // Todo: do something
    }

    /*
     * Events
     */
    public function onLevelCompletion(Closure $closure): Event
    {
        return $this->on('level-completion', $closure);
    }
}
