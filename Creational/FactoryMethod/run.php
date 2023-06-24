<?php

use FactoryMethod\StdoutLoggerFactory;

require __DIR__ . "/../../vendor/autoload.php";

$loggerFactory = new StdoutLoggerFactory();
$logger = $loggerFactory->createLogger();

$logger->log("Hello!");
