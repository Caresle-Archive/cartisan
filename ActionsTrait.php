<?php

namespace Caresle\Commands\Traits;
use Caresle\Commands\UsageCommand;

trait ActionsTrait
{
    public function help() {
        UsageCommand::show_usage();
    }
}