<?php

namespace Katas\Tests;

use Katas\CodeWars;
use PHPUnit\Framework\TestCase;

class CodeWarsTest extends TestCase
{
    public function testItReturnsYesWhenBoolIsTrue(): void
    {
        $this->assertSame("Yes", (new CodeWars())->boolToWord(True));
    }

    public function testItReturnsNoWhenBoolIsFalse(): void
    {
        $this->assertSame("No", (new CodeWars())->boolToWord(False));
    }
}