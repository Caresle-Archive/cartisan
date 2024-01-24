<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SimpleTest extends TestCase
{
    public function testForTesting(): void
    {
        $string = 'my String for test';

        $this->assertEquals('my String for test', $string);
    }
}