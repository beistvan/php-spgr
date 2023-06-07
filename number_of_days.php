<?php
	function number_of_days($m) {
		if ($m < 1 || $m > 12) {
			echo "Month Not Found";
		} elseif ($m == 2) {
			return 28;
		} elseif ($m == 4 || $m == 6 || $m == 9 || $m == 11) {
			return 30;
		} else {
			return 31;
		}
	}
?>