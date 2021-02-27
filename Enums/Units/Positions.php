<?php

class Positions
{
    const corner_top_left = [0, 0];
    const corner_top_right = [0, Dimensions::stageWidth];
    const corner_bottom_right = [Dimensions::stageHeight, Dimensions::stageWidth];
    const corner_bottom_left = [Dimensions::stageHeight, 0];
    const archer_start = [Dimensions::stageWidth / 2, Dimensions::stageHeight / 2];
}
