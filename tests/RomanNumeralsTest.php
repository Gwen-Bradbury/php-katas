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
}
