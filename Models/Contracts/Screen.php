<?php

namespace Contracts;

use Renderable;
use GameStage;

interface Screen extends Renderable
{
    public function addStage(GameStage $stage): void;
}
