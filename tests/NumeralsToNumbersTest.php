<?php

namespace Katas\Tests;

use Katas\NumeralsToNumbers;
use PHPUnit\Framework\TestCase;

class NumeralsToNumbersTest extends TestCase {

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

    public function testItReturnsFourWhenInputIsIV(): void
    {
        $this->assertSame(4, (new NumeralsToNumbers())->convertToNumber("IV"));
    }

    public function testItReturnsFiveWhenInputIsV(): void
    {
        $this->assertSame(5, (new NumeralsToNumbers())->convertToNumber("V"));
    }

    public function testItReturnsSixWhenInputIsVI(): void
    {
        $this->assertSame(6, (new NumeralsToNumbers())->convertToNumber("VI"));
    }

    public function testItReturnsSevenWhenInputIsVII(): void
    {
        $this->assertSame(7, (new NumeralsToNumbers())->convertToNumber("VII"));
    }

    public function testItReturnsEightWhenInputIsVIII(): void
    {
        $this->assertSame(8, (new NumeralsToNumbers())->convertToNumber("VIII"));
    }

    public function testItReturnsNineWhenInputIsIX(): void
    {
        $this->assertSame(10, (new NumeralsToNumbers())->convertToNumber("X"));
    }
}

