<?php

$class = [9, 8, 7, 6, 5, 4, 3, 2, 1];

function printArray($array) {
	$str = "[";
	foreach ($array as $element) {
		$str .= " $element";
	}
	return $str .= " ]";
}

echo "The array is " . printArray($class) . "<br>";
sort($class);
echo "The array after sorting in ascending order is " . printArray($class) . "<br>";

sort($class);