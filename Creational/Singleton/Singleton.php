<?php

namespace Singleton;

final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton {
        if(self::$instance === null){
            self::$instance === new self();
        }

        return self::$instance;
    }
}