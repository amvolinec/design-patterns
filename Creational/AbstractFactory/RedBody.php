<?php

class RedBody implements BodyInterface
{

    public function drawBody(int $x, int $y): void
    {
        echo 'Your red body in axis x = ' . $x . ' and axis y = ' . $y . '</ br>' . PHP_EOL;
    }
}