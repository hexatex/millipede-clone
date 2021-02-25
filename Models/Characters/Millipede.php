<?php

class Millipede extends Model implements Character
{
    /** @var array|BodySegment[] */
    protected $bodySegments = [];

    public function addUnapede(BodySegment $bodySegment): void
    {
        array_push($this->bodySegments, $bodySegment);
    }
}
