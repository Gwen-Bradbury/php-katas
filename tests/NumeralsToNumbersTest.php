<?php

namespace Katas\Tests;

use Katas\NumeralsToNumbers;
use PHPUnit\Framework\TestCase;

class NumeralsToNumbersTest extends TestCase
{
    public function testItReturnsOneWhenInputIsI(): void
    {
        $this->assertSame(1, (new NumeralsToNumbers())->convertToNumber("I"));
    }

    public function testItReturnsTwoWhenInputIsII(): void
    {
        $this->assertSame(2, (new NumeralsToNumbers())->convertToNumber("II"));
    }

    public function testItReturnsThreeWhenInputIsIII(): void
    {
        $this->assertSame(3, (new NumeralsToNumbers())->convertToNumber("III"));
    }
}