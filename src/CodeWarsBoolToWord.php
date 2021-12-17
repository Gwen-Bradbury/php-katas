<?php

namespace Katas;

class CodeWarsBoolToWord
//Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false.
{
    public function boolToWord(bool $bool): string
    {
        return $bool ? "Yes" : "No";
    }
}