<?php

    $a = readline();
    $n = readline();
    $s = 0;
    $p = 1;

    for ($i = 0; $i < $n; $i++) {
        $k = $a % 10;
        $s += $k;
        $p *= $k;
        $a /= 10;
    }

    echo $s . " " . $p;
?>