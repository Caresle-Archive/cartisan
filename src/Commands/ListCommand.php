<?php

namespace Caresle\Commands;

class ListCommand extends Command
{
    public function __construct()
    {
        parent::__construct('list');
    }

    public function use()
    {
        echo "Override";
    }
}