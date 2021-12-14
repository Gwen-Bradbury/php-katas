<?php

namespace Katas\Tests;

use Katas\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    public function testItReturnsPrimeFactorsOfTwo(): void
    {
        $this->assertSame([2], (new PrimeFactors())->findPrimeFactors(2));
    }

    public function testItReturnsPrimeFactorsOfThree(): void
    {
        $this->assertSame([3], (new PrimeFactors())->findPrimeFactors(3));
    }

    public function testItReturnsPrimeFactorsOfFour(): void
    {
        $this->assertSame([2, 2], (new PrimeFactors())->findPrimeFactors(4));
    }

    public function testItReturnsPrimeFactorsOfFive(): void
    {
        $this->assertSame([5], (new PrimeFactors())->findPrimeFactors(5));
    }

    public function testItReturnsPrimeFactorsOfSix(): void
    {
        $this->assertSame([2, 3], (new PrimeFactors())->findPrimeFactors(6));
    }

    public function testItReturnsPrimeFactorsOfEight(): void
    {
        $this->assertSame([2, 2, 2], (new PrimeFactors())->findPrimeFactors(8));
    }

    public function testItReturnsPrimeFactorsOfNine(): void
    {
        $this->assertSame([3, 3], (new PrimeFactors())->findPrimeFactors(9));
    }

    public function testItReturnsPrimeFactorsOfTwentyFive(): void
    {
        $this->assertSame([5, 5], (new PrimeFactors())->findPrimeFactors(25));
    }
}