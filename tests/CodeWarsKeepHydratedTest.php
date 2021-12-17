<?php

namespace Katas\Tests;

use Katas\CodeWarsKeepHydrated;
use PHPUnit\Framework\TestCase;

class CodeWarsKeepHydratedTest extends TestCase
{
    public function testItReturns0LitresForOneHour(): void
    {
        $this->assertSame(0, (new CodeWarsKeepHydrated())->litres(1));
    }

    public function testItReturns1LitreForTwoHours(): void
    {
        $this->assertSame(1, (new CodeWarsKeepHydrated())->litres(2));
    }

    public function testItReturns1LitreForThreeHours(): void
    {
        $this->assertSame(1, (new CodeWarsKeepHydrated())->litres(3));
    }

    public function testItReturns6LitresForFourHours(): void
    {
        $this->assertSame(2, (new CodeWarsKeepHydrated())->litres(4));
    }

    public function testItReturns6LitresForFiveHours(): void
    {
        $this->assertSame(2, (new CodeWarsKeepHydrated())->litres(5));
    }

    public function testItReturns12LitresForTwentyFourHours(): void
    {
        $this->assertSame(12, (new CodeWarsKeepHydrated())->litres(24));
    }

    public function testItReturns17LitresForThirtyFiveHours(): void
    {
        $this->assertSame(17, (new CodeWarsKeepHydrated())->litres(35));
    }
}


