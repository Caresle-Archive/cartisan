<?php

use Caresle\Commands\ListCommand;
use Caresle\Commands\MakeCommand;
use Caresle\Env\Environment;

/**
 * Load the environment variables for the app
 */
Environment::load();

/**
 * Create the global object containing all commands
 */

$commands = [
    "list" => ListCommand::class,
    "make" => MakeCommand::class,
];