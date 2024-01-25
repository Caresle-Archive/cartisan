<?php

declare(strict_types=1);

use Caresle\Commands\UsageCommand;
use PHPUnit\Framework\TestCase;

final class SimpleTest extends TestCase
{
    public function testCLI(): void
    {
        $output = shell_exec('php cli');

        UsageCommand::show_usage();

        // $this->assertEquals($expected_output, $output);
    }
}