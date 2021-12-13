<?php

namespace Katas;

class RomanNumerals
{
    private const NUMERALS = [
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I"
    ];

    public function convertToNumeral(int $number): string
    {
        $output = "";
        foreach (self::NUMERALS as $value => $numeral) {
            $output .= $this->repeatNumeral($numeral, $number, $value);
            $number -= $this->subtractNumeralsValue($number, $value);
        }
        return $output;
    }

    public function getTimesNumberIsDivisibleByValue(int $number, int $value): int
    {
        return intdiv($number, $value);
    }

    public function repeatNumeral(string $numeral, int $number, int $value): string
    {
        return str_repeat($numeral, $this->getTimesNumberIsDivisibleByValue($number, $value));
    }

    public function subtractNumeralsValue(int $number, int $value): int
    {
        return $this->getTimesNumberIsDivisibleByValue($number, $value) * $value;
    }
}



