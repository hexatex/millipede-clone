<?php

class ArcherService
{
    public function get()
    {
        $archer = new Archer;
        $archer->resetPosition();

        return $archer;
    }
}
