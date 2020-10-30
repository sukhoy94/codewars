<?php

$result = [];

function permute($str, $start_index, $end_index, &$result = []) {
    if ($start_index == $end_index) {
        $result[] = $str;
        return;
    }
    
    for ($i = $start_index; $i <= $end_index; $i++) {
        $result[] = $str;
        swap($str, $i, $start_index);
        permute($str, $start_index + 1, $end_index, $result);
    }
}

function swap(&$str, $first_index, $second_index) {
    $tmp = $str[$first_index];
    $str[$first_index] = $str[$second_index];
    $str[$second_index] = $tmp;
}

$str = "abc";
$result = [];
permute($str, 0, strlen($str) - 1, $result);
print_r(array_unique($result));