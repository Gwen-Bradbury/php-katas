<?php

namespace Katas;

class NumeralsToNumbers
{
    public function convertToNumber(string $numeral): int
    {
        if ($numeral === "IV") {
            $numeral = "IIII";
        }

        if ($numeral === "IX") {
            $numeral = "IIIIIIIII";
        }

        if ($V = strrchr($numeral, "V")) {
            $V = "IIIII";
            $numeral .= $V;
        }
        return substr_count($numeral, "I");
    }
}

