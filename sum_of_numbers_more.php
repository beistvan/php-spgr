<?php
     function sum_of_numbers_more ($n, $m) {
         return array_sum(str_split($n)) > array_sum(str_split($m)) ? $n : $m;
     }
?>