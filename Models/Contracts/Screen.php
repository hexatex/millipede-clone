<?php

namespace Contracts;

interface Screen
{
    public function addStage(\Contracts\Stage $stage): void;
}
