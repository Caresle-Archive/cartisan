<?php

namespace Caresle\Commands;

class UsageCommand extends Command
{
    public function __construct()
    {
        parent::__construct('usage');
    }

    public static function show_usage()
    {
        echo str_repeat("=", 10);
        echo "\n";
        echo "Usage of the php logs";
        echo "\n";
        echo str_repeat("=", 10);
    } 
}