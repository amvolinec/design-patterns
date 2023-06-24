<?php

namespace FactoryMethod;

class FileLoggerFactory implements LoggerFactoryInterface
{

    public function __construct(private string $filePath)
    {
    }

    public function createLogger(): LoggerInterface
    {
        return new FileLogger($this->filePath);
    }
}