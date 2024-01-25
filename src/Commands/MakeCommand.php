<?php

declare(strict_types = 1);

namespace Caresle\Commands;

class MakeCommand extends Command
{
    public function __construct()
    {
        parent::__construct('make');
    }

    public function use(array $arguments = [])
    {
        if (!isset($arguments)) {
            $this->usage();
            return;
        }

        if (count($arguments) <= 2) {
            $this->usage();
            return;
        }

        $name = $arguments[2];

        $template = __DIR__ . '/../../files/controller/ControllerTemplate.php';
        $generate = __DIR__ . '/../../generated/';

        if (!file_exists($generate)) {
            mkdir($generate);
        }

        $code = file_get_contents($template);

        $generate_code = str_replace('{{ClassName}}', $name, $code);

        file_put_contents($generate . "$name.php", $generate_code);
    }

    public function usage()
    {
        $str = <<<EOD
            Make command.

            make <name>
        EOD;

        echo $str;
    }
}