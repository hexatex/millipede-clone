<?php

class Millipede extends Model implements Character
{
    use IsCharacter;

    /** @var array|BodySegment[] */
    protected $bodySegments = [];

    public function addBodySegment(BodySegment $bodySegment): void
    {
        array_push($this->bodySegments, $bodySegment);
    }
}
