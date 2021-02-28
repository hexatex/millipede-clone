<?php

class ArcherArea extends Model implements Renderable
{
    use IsRenderable;

    /** @var ?Archer */
    protected $archer;

    public function setArcher(Archer $archer): void
    {
        $this->archer = $archer;
    }
}
