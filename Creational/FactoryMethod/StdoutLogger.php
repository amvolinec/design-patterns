<?php

namespace FactoryMethod;

class StdoutLogger implements LoggerInterface
{

    public function log(string $message): void
    {
        echo $message;
    }
}