<?php

namespace Katas;

class PrimeFactors
{
    public function findPrimeFactors(int $number): array
    {
        $factors = [];

        for($denominator = 2; $number > 1; $denominator++){
            for (;$number % $denominator === 0; $number /= $denominator) {
                $factors[] = $denominator;
            }
        }

        return $factors;
    }
}
