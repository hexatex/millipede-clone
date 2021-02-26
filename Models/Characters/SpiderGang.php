<?php

class SpiderGang extends Model implements Character
{
    use IsCharacter;

    /** Spider[]  */
    protected $spiders = [];

    public function addSpider(Spider $spider): void
    {
        array_push($this->spiders, $spider);
    }
}
