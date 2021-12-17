<?php

namespace Katas;

class CodeWarsTribonacciSequence
//you need to create a fibonacci function that given a signature array/list, returns the first n elements -
// signature included of the so seeded sequence.
//Signature will always contain 3 numbers; n will always be a non-negative number; if n == 0, then return an empty array
{
    public function tribonacci(array $signature, int $n): array
    {
        if ($n === 0) {
            $sequence = [];
        } elseif ($n < 3) {
            $sequence[] = $n;
        }else {
            $sequence = $signature;
        }

        for ($i = 1; count($sequence) < $n; $i++) {
            $value = $sequence[$i - 1] + $sequence[$i] + $sequence[$i + 1];
            $sequence[] = $value;
        }
        return $sequence;
    }
}





