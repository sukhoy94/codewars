<?php

declare(strict_types=1);
/**
 *Your task is to make function, which returns the sum of a sequence of integers.

The sequence is defined by 3 non-negative values: begin, end, step.

If begin value is greater than the end, function should returns 0

Examples

sequence_sum(2, 2, 2); // => 2
sequence_sum(2, 6, 2); // => 12 (= 2 + 4 + 6)
sequence_sum(1, 5, 1); // => 15 (= 1 + 2 + 3 + 4 + 5)
sequence_sum(1, 5, 3); // => 5 (= 1 + 4) 

 */

function sequence_sum(int $begin, int $end, int $step): int {
    return $begin > $end ? 0 : $begin + sequence_sum($begin+$step, $end, $step);
}