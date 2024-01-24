<?php

namespace Caresle\Env;

use Symfony\Component\Dotenv\Dotenv;

class Environment
{
    public static $app;
    public static $debug;
    public static $version;

    public static function load()
    {
        $dotenv = new Dotenv();

        $dotenv->load(__DIR__ . '/../../.env');

        self::$app = $_ENV["APP_NAME"] ?? "";
        self::$debug = $_ENV["DEBUG"] ?? false;
        self::$version = $_ENV["VERSION"] ?? "1.0.0";
    }
}