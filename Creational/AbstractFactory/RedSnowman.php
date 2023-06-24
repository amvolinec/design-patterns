<?php

class RedSnowman implements SnowmanInterface
{
    protected $head;
    protected $body;

    public function __construct()
    {
        $this->head = new RedHead();
        $this->body = new RedBody();
    }

    public function drawHead(int $x, int $y): void
    {
        $this->head->drawHead($x, $y);
    }

    public function drawBody(int $x, int $y): void
    {
        $this->body->drawBody($x, $y);
    }
}