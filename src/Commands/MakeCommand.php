<?php

declare(strict_types = 1);

namespace Caresle\Commands;
use Caresle\Helpers\MakeHelpers;

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
        $option = $arguments[3] ?? "";

        $template_to_use = MakeHelpers::controller;

        if ($option == "--empty")
            $template_to_use = MakeHelpers::empty;

        $template = __DIR__ . "/../../files/controller/$template_to_use.php";
        $generate = __DIR__ . '/../../generated/';

        if (!file_exists($generate))
            mkdir($generate);

        if (file_exists($generate . "$name.php")) {
            echo "The file $name already exists";
            return;
        }

        $code = file_get_contents($template);

        $generate_code = str_replace('{{ClassName}}', $name, $code);

        file_put_contents($generate . "$name.php", $generate_code);
    }

    public function usage()
    {
        $str = <<<EOD
            Make command.

            make <name> <list-of-options>

            Example:

            make ControllerTest

            Options:
            Name\tDescription

            --empty\tCreates a class with only the name
        EOD;

        echo $str;
    }
}