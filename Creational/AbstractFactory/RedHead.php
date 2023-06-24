<?php

class RedHead implements HeadInterface
{

    public function drawHead(int $x, int $y): void
    {
        echo 'Your red head in axis x = ' . $x . ' and axis y = ' . $y . '</ br>' . PHP_EOL;
    }
}