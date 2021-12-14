<?php

namespace Katas;

class NumeralsToNumbers
{
    public function convertToNumber(string $numeral): int
    {

        if ($numeral === "V") {
            $number = 5;
        } elseif ($numeral === "IV") {
            $number = 4;
        } else {
            $number = substr_count($numeral, "I");
        }
        return $number;
    }
}




