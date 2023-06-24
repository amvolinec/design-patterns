<?php

namespace FactoryMethod;

interface LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface;
}