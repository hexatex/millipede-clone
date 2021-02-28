<?php

class DemoStage extends Model implements Contracts\Stage
{
    use IsStage;

    /** @var ?Contracts\Level */
    protected $level;

    /*
     * Renderable
     */
    public function getZIndex(): int
    {
        return ZIndices::stage;
    }
}
