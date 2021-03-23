<?php

$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];

function printArray($array) {
	$str = "[";
	foreach ($array as $element) {
		$str .= " $element";
	}
	return $str .= " ]";
}

echo "Array 1 is " . printArray($array1) . "<br>" . "<br>";
echo "Array 2 is " . printArray($array2) . "<br>" . "<br>";
echo "Arrays after concatenation is " . printArray(array_merge($array1, $array2)) . "<br>" . "<br>";

foreach ($array1 as &$element) {$element += 2;}
echo "Array 1 after adding 2 to every element using foreach is " . printArray($array1) . "<br>" . "<br>";

$sum = array_reduce($array2, fn($carry, $element, $initial = 0) => $element + $carry);
echo "Reducing Array 2 to its sum using array_reduce is  " . $sum . "<br>" . "<br>";

echo "Array 2 after reversing using array_reverse is " . printArray(array_reverse($array2)) . "<br>" . "<br>";