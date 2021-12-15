<?php

namespace Katas;

class CodeWars
//Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false.
{
    public function boolToWord(bool $bool): string{
        if ($bool === True){
            $bool = "Yes";
        } else {
            $bool = "No";
        }
        return $bool;
    }
}