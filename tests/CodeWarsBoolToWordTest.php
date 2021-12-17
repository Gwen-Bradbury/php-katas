<?php

namespace Katas\Tests;

use Katas\CodeWarsBoolToWord;
use PHPUnit\Framework\TestCase;

class CodeWarsBoolToWordTest extends TestCase
{
    public function testItReturnsYesWhenBoolIsTrue(): void
    {
        $this->assertSame("Yes", (new CodeWarsBoolToWord())->boolToWord(True));
    }

    public function testItReturnsNoWhenBoolIsFalse(): void
    {
        $this->assertSame("No", (new CodeWarsBoolToWord())->boolToWord(False));
    }
}