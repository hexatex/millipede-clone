<?php

class BodySegment extends Character
{
    /** @var string */
    protected $bodySegmentType = BodySegmentTypes::bodyRing;

    public function setBodySegmentType(string $bodySegmentType): void
    {
        $this->bodySegmentType = $bodySegmentType;
    }

    public function getBodySegmentType(): string
    {
        return $this->bodySegmentType;
    }
}
