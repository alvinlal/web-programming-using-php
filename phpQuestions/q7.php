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
echo "Array after concatenation is " . printArray(array_merge($array1, $array2)) . "<br>" . "<br>";

array_push($array1, 88);
echo "Array 1 after pushing element 88 is " . printArray($array1) . "<br>" . "<br>";
array_pop($array2);
echo "Array 2 after poping an element is " . printArray($array2) . "<br>" . "<br>";
array_shift($array1);
echo "Array 1 after shifting an element is " . printArray($array1) . "<br>" . "<br>";
array_unshift($array1, 77);
echo "Array 1 after unshifting the element 77 is " . printArray($array1) . "<br>" . "<br>";