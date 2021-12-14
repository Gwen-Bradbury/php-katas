<?php

namespace Katas;

class NumeralsToNumbers
{
    public function convertToNumber(string $numeral): int
    {
        if ($numeral === "IV"){
            $numeral = "IIII";
        }

        if ($I = strrchr($numeral, "V")) {
            $I = "IIIII";
            $numeral .= $I;
        }
        return substr_count($numeral, "I");
    }
}

