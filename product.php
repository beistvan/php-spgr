<?php

    $n = readline();
    $m = readline();
    $p = 1;

    for ($i = $n; $i <= $m; $i++) {
        $p *= $i;
    }

    echo $p;
?>