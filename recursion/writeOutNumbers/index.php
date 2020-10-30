<?php

declare(strict_types = 1);


function number2words(int $n): string {
    
    if ($n == 0) {
        return "zero";
    }
    
    $res = "";
    
    $dictionary = [
        90 => "ninety-",
        80 => "eighty-",
        70 => "seventy-",
        60 => "sixty-",
        50 => "fifty-",
        40 => "forty-",
        30 => "thirty-",
        20 => "twenty-",
        19 => "nineteen",
        18 => "eighteen",
        17 => "seventeen",
        16 => "sixteen",
        15 => "fifteen",
        14 => "fourteen",
        13 => "thirteen",
        12 => "twelve",
        11 => "eleven",
        10 => "ten",
        9 => "nine ",
        8 => "eight ",
        7 => "seven ",
        6 => "six ",
        5 => "five ",
        4 => "four ",
        3 => "three ",
        2 => "two ",
        1 => "one ",
    ];
    
    while ($n > 0){
        // 1500
        if ($n >= 1000) {
            $res .= number2words((int) substr($n, 0, -3))." thousand ";
            $n = $n % 1000;
        }
        if ($n >= 100) {
            $res .= number2words((int) substr($n, 0, -2))." hundred ";
            $n = $n % 100;
        }
        foreach ($dictionary as $key => $value) {
            if ($n / $key >= 1) {
                $n = $n % $key;
                $res .= $value;
            }
        }
    }
    
    return trim($res, "/[ -]/");
}

