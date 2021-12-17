<?php

namespace Katas\Tests;

use Katas\CodeWarsTribonacciSequence;
use PHPUnit\Framework\TestCase;

class CodeWarsTribonacciSequenceTest extends TestCase
{
    public function testItReturnsEmptyArrayIfNIs0(): void
    {
        $this->assertSame([], (new CodeWarsTribonacciSequence())->tribonacci([1, 1, 1], 0));
    }

    public function testItReturns1IfNIs1(): void
    {
        $this->assertSame([1], (new CodeWarsTribonacciSequence())->tribonacci([1, 1, 1], 1));
    }

    public function testItReturnsSumOfOneOneOne(): void
    {
        $this->assertSame([1, 1, 1, 3], (new CodeWarsTribonacciSequence())->tribonacci([1, 1, 1], 4));
    }

    public function testItReturnsSumOfOneOneTwo(): void
    {
        $this->assertSame([1, 1, 2, 4], (new CodeWarsTribonacciSequence())->tribonacci([1, 1, 2], 4));
    }

    public function testItReturnsSumOfOneOneThree(): void
    {
        $this->assertSame([1, 1, 3, 5], (new CodeWarsTribonacciSequence())->tribonacci([1, 1, 3], 4));
    }

    public function testItReturnsSumOfThreePreviousSignaturesOneOneThree(): void
    {
        $this->assertSame([1, 1, 1, 3, 5], (new CodeWarsTribonacciSequence())->tribonacci([1, 1, 1], 5));
    }

    public function testItReturnsSumOfThreePreviousSignaturesOneThreeFive(): void
    {
        $this->assertSame([1, 1, 1, 3, 5, 9], (new CodeWarsTribonacciSequence())->tribonacci([1, 1, 1], 6));
    }

    public function testItReturnsSumOfThreePreviousSignaturesUpToTen(): void
    {
        $this->
        assertSame([1, 1, 1, 3, 5, 9, 17, 31, 57, 105], (new CodeWarsTribonacciSequence())->
        tribonacci([1, 1, 1], 10));
    }
}

