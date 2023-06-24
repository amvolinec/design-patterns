<?php

interface SnowmanInterface
{
    public function drawHead(int $x, int $y): void;

    public function drawBody(int $x, int $y): void;
}