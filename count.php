<?php

    $n = readline();
    $zeroes = 0;
    $odds = 0;
    $evens = 0;

    for ($i = 0; $i < $n; $i++) {
        $m = readline();
        if ($m == 0) {
            $zeroes++;
        } elseif ($m % 2 != 0) {
            $odds++;
        } else {
            $evens++;
        }
    }
    echo $zeroes . " " . $odds . " " . $evens;

?>