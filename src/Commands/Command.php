<?php

namespace Caresle\Commands;

class Command
{
    // command name
    public static $name;
    
    public function __construct($name = '')
    {
        self::$name = $name;
    }

    public function use() {}

    public function usage() {}
}