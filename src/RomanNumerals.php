<?php

namespace Katas;

class RomanNumerals
{
    private const NUMERALS = [
        15 => "XV",
        14 => "XIV",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV"
    ];

    public function numbersToNumerals(int $number): string
    {
        $output = "";
        foreach (self::NUMERALS as $value => $numeral) {
            if (intdiv($number, $value) > 0) {
                $output = $numeral;
                $number -= $value;
            }
        }

        return $output . str_repeat('I', $number);
    }
}



