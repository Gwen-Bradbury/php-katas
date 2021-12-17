<?php

namespace Katas;

class CodeWarsKeepHydrated
//Nathan loves cycling.
//Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of
// water per hour of cycling.
//You get given the time in hours and you need to return the number of litres
// Nathan will drink, rounded to the smallest value.
{
    public function litres(int $t): int
    {
        return floor($t * 0.5);
    }
}