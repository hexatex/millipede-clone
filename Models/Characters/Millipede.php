<?php

class Millipede extends Model implements Character
{
    use IsCharacter;

    /** @var BodySegment[] */
    protected $bodySegments = [];

    /** @var int */
    protected $bodySegmentCount = 0;

    public function addBodySegment(BodySegment $bodySegment): void
    {
        if (!$this->bodySegmentCount) {
            $bodySegment->setBodySegmentType(BodySegmentTypes::headAndTail);
        } else {
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
