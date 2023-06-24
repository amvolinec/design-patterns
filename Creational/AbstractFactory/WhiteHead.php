<?php

class WhiteHead implements HeadInterface
{

    public function drawHead(int $x, int $y): void
    {
        echo 'Your white head in axis x = ' . $x . ' and axis y = ' . $y . '</ br>' . PHP_EOL;
    }
}