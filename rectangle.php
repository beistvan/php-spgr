<?php
	function rectangle($cols, $rows) {
		for($i = 0; $i < $rows; $i++) {
			for($j = 0; $j < $cols - 1; $j++) {
				echo "* ";
			}
			echo "*\n";
		}
	}
?>