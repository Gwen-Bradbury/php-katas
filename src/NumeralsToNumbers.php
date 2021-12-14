<?php

namespace Katas;

class NumeralsToNumbers
{
    public function convertToNumber(string $numeral): int
    {
        $numeralsToI = [
            "IV" => "IIII",
            "V" => "IIIII",
            "VI" => "IIIIII"
        ];

        foreach ($numeralsToI as $key => $value) {
            if($numeral === $key) {
                $numeral = $value;
            }
        }
        return substr_count($numeral, "I");
    }
}

