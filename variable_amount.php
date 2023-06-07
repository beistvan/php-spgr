<?php
	function variable_amount(...$nums) {
		$c = 0;
		foreach ($nums as $n) {
			$c++;
		}
		echo $c;
	}
?>