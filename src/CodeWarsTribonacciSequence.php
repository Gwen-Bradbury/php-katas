<?php

namespace Katas;

class CodeWarsTribonacciSequence
{
    public function findTheNextNumber(array $startingThreeDigits, int $limit): array
    {
        $tribonacciSequence = [];
        for ($i = 0; $i < $limit; $i++) {
            if ($i < 3) {
                $tribonacciSequence[$i] = $startingThreeDigits[$i];
            } else {
                $tribonacciSequence[$i] = $tribonacciSequence[$i - 1] + $tribonacciSequence[$i - 2] + $tribonacciSequence[$i - 3];
            }
        }
        return $tribonacciSequence;
    }
}





