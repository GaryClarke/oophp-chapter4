<?php

namespace App\Conference;

abstract class Registrant
{
    protected static $meta = 'Conference Registrant';

    public function getMeta()
    {
        return static::$meta;
    }
}