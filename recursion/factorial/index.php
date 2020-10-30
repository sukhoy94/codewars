<?php

declare(strict_types = 1);

function fact(int $n): int {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    
    return $n * fact($n - 1);
}


