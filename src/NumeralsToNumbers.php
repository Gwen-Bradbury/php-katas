<?php

namespace Katas;

class NumeralsToNumbers
{
    public function convertToNumber(string $numeral): int
    {
        return strlen($numeral);
    }
}


//if ($numeral >= "III") {
//    $number = 3;
//}
//if ($numeral === "II") {
//    $number = 2;
//}
//return $number;