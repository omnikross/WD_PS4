<?php
$array = array();
for ($i = 1; $i <= 100; $i++) { 
	$array[$i] = rand(1, 10);
}
$uniq = array_unique($array);
$sorted = asort($uniq);
$reversed = array_reverse($uniq);
print_r($reversed);	
?>
