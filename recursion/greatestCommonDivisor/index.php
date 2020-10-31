<?php

declare(strict_types = 1);

/**
 * @param int $x
 * @param int $y
 * @return int
 * 
 * Find the greatest common divisor of two positive integers. The integers can be large, so you need to find a clever solution.
 * The inputs x and y are always greater or equal to 1, so the greatest common divisor will always be an integer that is also greater or equal to 1.
 */

function greatestCommonDivisor(int $x, int $y): int {
    if ($x > $y) { 
        $max = $x;
        $min = $y;
    } else {
        $max = $y;
        $min = $x;
    }
    
    
    if ($max % $min == 0) {
        return $min;
    }
    
    return greatestCommonDivisor($max % $min, $min);
}

//
//$this->assertSame(1, mygcd(1, 3));
//$this->assertSame(12, mygcd(60, 12));
//$this->assertSame(334, mygcd(2672, 5678));
//$this->assertSame(846, mygcd(10927782, 6902514));
//$this->assertSame(4, mygcd(1590771464, 1590771620));


$gfc = greatestCommonDivisor(1590771464,1590771620);

echo $gfc;