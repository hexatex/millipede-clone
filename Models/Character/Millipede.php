<?php

class Millipede extends Character
{
    /** @var BodySegment[] */
    protected $bodySegments = [];

    /** @var int */
    protected $bodySegmentCount = 0;

    public function addBodySegment(BodySegment $bodySegment): void
    {
        if (!$this->bodySegmentCount) {
            $bodySegment->setBodySegmentType(BodySegmentTypes::headAndTail);
        } else if ($this->bodySegmentCount === 1) {
            $this->bodySegments[0]->setBodySegmentType(BodySegmentTypes::tail);
            $bodySegment->setBodySegmentType(BodySegmentTypes::head);
        } else if ($this->bodySegmentCount >= 2) {
            $this->bodySegments[$this->bodySegmentCount]->setBodySegmentType(BodySegmentTypes::bodyRing);
            $bodySegment->setBodySegmentType(BodySegmentTypes::head);
        }

        $this->bodySegments[$bodySegment->getCode()] = $bodySegment;
        $this->bodySegmentCount++;
    }

    public function removeBodySegment(BodySegment $bodySegment)
    {
        // unset($this->bodySegments[$bodySegment->getCode()]);
        // $this->bodySegmentCount--;
    }
}
