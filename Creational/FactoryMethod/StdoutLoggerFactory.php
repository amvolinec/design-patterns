<?php

namespace FactoryMethod;

class StdoutLoggerFactory implements LoggerFactoryInterface
{

    public function createLogger(): LoggerInterface
    {
        return new StdoutLogger();
    }
}