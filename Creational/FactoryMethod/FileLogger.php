<?php

namespace FactoryMethod;

class FileLogger implements LoggerInterface
{

    public function __construct(private string $filePath)
    {
    }

    public function log(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}