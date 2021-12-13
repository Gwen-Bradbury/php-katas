<?php

namespace Katas\Tests;

use Katas\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    public function  testItReturnsIWhenInputIsOne(): void
    {
        $this->assertSame('I', (new RomanNumerals())->convertToNumeral(1));
    }

    public function  testItReturnsIIWhenInputIsTwo(): void
    {
        $this->assertSame('II', (new RomanNumerals())->convertToNumeral(2));
    }

    public function  testItReturnsIIIWhenInputIsThree(): void
    {
        $this->assertSame('III', (new RomanNumerals())->convertToNumeral(3));
    }

    public function  testItReturnsIVWhenInputIsFour(): void
    {
        $this->assertSame('IV', (new RomanNumerals())->convertToNumeral(4));
    }

    public function  testItReturnsVWhenInputIsFive(): void
    {
        $this->assertSame('V', (new RomanNumerals())->convertToNumeral(5));
    }

    public function  testItReturnsVIWhenInputIsSix(): void
    {
        $this->assertSame('VI', (new RomanNumerals())->convertToNumeral(6));
    }

    public function  testItReturnsVIIWhenInputIsSeven(): void
    {
        $this->assertSame('VII', (new RomanNumerals())->convertToNumeral(7));
    }

    public function  testItReturnsVIIIWhenInputIsEight(): void
    {
        $this->assertSame('VIII', (new RomanNumerals())->convertToNumeral(8));
    }

    public function  testItReturnsIXWhenInputIsNine(): void
    {
        $this->assertSame('IX', (new RomanNumerals())->convertToNumeral(9));
    }

    public function  testItReturnsXWhenInputIsTen(): void
    {
        $this->assertSame('X', (new RomanNumerals())->convertToNumeral(10));
    }

    public function  testItReturnsXIWhenInputIsEleven(): void
    {
        $this->assertSame('XI', (new RomanNumerals())->convertToNumeral(11));
    }

    public function  testItReturnsXIVWhenInputIsFourteen(): void
    {
        $this->assertSame('XIV', (new RomanNumerals())->convertToNumeral(14));
    }

    public function  testItReturnsXVWhenInputIsFifteen(): void
    {
        $this->assertSame('XV', (new RomanNumerals())->convertToNumeral(15));
    }

    public function  testItReturnsXVIWhenInputIsSixteen(): void
    {
        $this->assertSame('XVI', (new RomanNumerals())->convertToNumeral(16));
    }

    public function  testItReturnsXIXWhenInputIsNineteen(): void
    {
        $this->assertSame('XIX', (new RomanNumerals())->convertToNumeral(19));
    }


    public function  testItReturnsXXWhenInputIsTwenty(): void
    {
        $this->assertSame('XX', (new RomanNumerals())->convertToNumeral(20));
    }
}
