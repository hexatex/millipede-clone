<?php

class ArcherService
{
    public function get(): Archer
    {
        $archer = new Archer;
        $archer->resetPosition();

        return $archer;
    }
}
