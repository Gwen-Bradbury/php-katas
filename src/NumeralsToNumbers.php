<?php

namespace Katas;

class NumeralsToNumbers
{
    public function convertToNumber(string $numeral): int
    {
        if ($numeral === "IV") {
            return 4;
        }
       return substr_count($numeral, "I");

    }
}




