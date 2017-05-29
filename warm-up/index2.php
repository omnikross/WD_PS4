<?php 
$start  = -1000;
$finish = 1000;
$sum = 0;

for ($i = $start; $i <= $finish; $i++) { 
	$mod = abs($i % 10);
	if ($mod === 2 || $mod === 3 || $mod === 7) {
		$sum += $i;
	}
}
echo "$sum";
?>