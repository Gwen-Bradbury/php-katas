<?php

namespace Katas;

class NumeralsToNumbers
{
    public function convertToNumber(string $numeral): int
    {
        $numeralMap = [
            'IV' => 4,
            'V' => 5,
            'IX' => 9,
            'X' => 10
        ];

        foreach ($numeralMap as $roman => $value) {
            $numeral = str_replace($roman, str_repeat("I", $value), $numeral);
        }

        return substr_count($numeral, "I");

    }
}

