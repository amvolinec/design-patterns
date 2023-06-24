<?php

class WhiteBody implements BodyInterface
{

    public function drawBody(int $x, int $y): void
    {
        echo 'Your white body in axis x = ' . $x . ' and axis y = ' . $y . '</ br>' . PHP_EOL;
    }
}