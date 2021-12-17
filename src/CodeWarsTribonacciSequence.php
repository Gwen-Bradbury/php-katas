<?php

namespace Katas;

class CodeWarsTribonacciSequence
//you need to create a fibonacci function that given a signature array/list, returns the first n elements -
// signature included of the so seeded sequence.
//Signature will always contain 3 numbers; n will always be a non-negative number; if n == 0, then return an empty array
{
    public function tribonacci(array $signature, int $n): array
    {
        $sequence = [];
        for ($i = 0; $i < $n; $i++) {
            if ($i < 3) {
                $sequence[$i] = $signature[$i];
            } else {
                $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2] + $sequence[$i - 3];
            }
        }
        return $sequence;
    }
}





