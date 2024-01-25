<?php
declare(strict_types = 1);

namespace Caresle\Commands;

class UsageCommand extends Command
{
    public function __construct()
    {
        parent::__construct('usage');
    }

    public static function show_usage()
    {
        $str = str_repeat("=", 10) . "\n";
        $str .= "Usage of the php logs\n";
        $str .= str_repeat("=", 10);
        echo $str;
    } 
}