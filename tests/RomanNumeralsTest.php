<?php

namespace Katas\Tests;

use Katas\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    public function  testItReturnsIWhenInputIsOne(): void
    {
        $this->assertSame('I', (new RomanNumerals())->numbersToNumerals(1));
    }

    public function  testItReturnsIIWhenInputIsTwo(): void
    {
        $this->assertSame('II', (new RomanNumerals())->numbersToNumerals(2));
    }

    public function  testItReturnsIIIWhenInputIsThree(): void
    {
        $this->assertSame('III', (new RomanNumerals())->numbersToNumerals(3));
    }

    public function  testItReturnsIVWhenInputIsFour(): void
    {
        $this->assertSame('IV', (new RomanNumerals())->numbersToNumerals(4));
    }

    public function  testItReturnsVWhenInputIsFive(): void
    {
        $this->assertSame('V', (new RomanNumerals())->numbersToNumerals(5));
    }

    public function  testItReturnsVIWhenInputIsSix(): void
    {
        $this->assertSame('VI', (new RomanNumerals())->numbersToNumerals(6));
    }

    public function  testItReturnsVIIWhenInputIsSeven(): void
    {
        $this->assertSame('VII', (new RomanNumerals())->numbersToNumerals(7));
    }

    public function  testItReturnsVIIIWhenInputIsEight(): void
    {
        $this->assertSame('VIII', (new RomanNumerals())->numbersToNumerals(8));
    }

    public function  testItReturnsIXWhenInputIsNine(): void
    {
        $this->assertSame('IX', (new RomanNumerals())->numbersToNumerals(9));
    }

    public function  testItReturnsXWhenInputIsTen(): void
    {
        $this->assertSame('X', (new RomanNumerals())->numbersToNumerals(10));
    }

    public function  testItReturnsXIWhenInputIsEleven(): void
    {
        $this->assertSame('XI', (new RomanNumerals())->numbersToNumerals(11));
    }

    public function  testItReturnsXIVWhenInputIsFourteen(): void
    {
        $this->assertSame('XIV', (new RomanNumerals())->numbersToNumerals(14));
    }

    public function  testItReturnsXVWhenInputIsFifteen(): void
    {
        $this->assertSame('XV', (new RomanNumerals())->numbersToNumerals(15));
    }

    public function  testItReturnsXVIWhenInputIsSixteen(): void
    {
        $this->assertSame('XVI', (new RomanNumerals())->numbersToNumerals(16));
    }

    public function  testItReturnsXIXWhenInputIsNineteen(): void
    {
        $this->assertSame('XIX', (new RomanNumerals())->numbersToNumerals(19));
    }

    public function  testItReturnsXXWhenInputIsTwenty(): void
    {
        $this->assertSame('XX', (new RomanNumerals())->numbersToNumerals(20));
    }
}
