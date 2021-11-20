<?php

echo "<h1>Array operations</h1>";

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

echo "<h2>array_merge</h2><br>";
echo "Array after concatenation is " . printArray(array_merge($array1, $array2)) . "<br>" . "<br>";

echo "<h2>array_push</h2><br>";
array_push($array1, 88);
echo "Array 1 after pushing element 88 is " . printArray($array1) . "<br>" . "<br>";

echo "<h2>array_pop</h2><br>";
array_pop($array2);
echo "Array 2 after poping an element is " . printArray($array2) . "<br>" . "<br>";

echo "<h2>array_shift</h2><br>";
array_shift($array1);
echo "Array 1 after shifting an element is " . printArray($array1) . "<br>" . "<br>";

echo "<h2>array_unshift</h2><br>";
array_unshift($array1, 77);
echo "Array 1 after unshifting the element 77 is " . printArray($array1) . "<br>" . "<br>";

echo "<h1>Array Handling functions</h1>";

$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];

echo "Array 1 is " . printArray($array1) . "<br>" . "<br>";
echo "Array 2 is " . printArray($array2) . "<br>" . "<br>";

echo "<h2>count</h2><br>";
echo "The number of elements in Array 1 is " . count($array1) . "<br>" . "<br>";

echo "<h2>sort</h2><br>";
sort($array1);
echo "Array 1 after sorting is " . printArray($array1);

echo "<h2>array_reverse</h2><br>";
$array1 = array_reverse($array1);
echo "Array 1 after reversing is " . printArray($array1) . "<br>" . "<br>";

echo "<h2>array_search</h2><br>";
$key = array_search(3, $array1);
echo "The element 3 is found at index " . $key . " in the array";

echo "<h2>sizeof</h2><br>";
echo "The size of the Array 1 is " . sizeof($array1) . "<br>" . "<br>";

echo "<h2>array_sum</h2><br>";
echo "The sum of the elements in Array 1 is " . array_sum($array1) . "<br>" . "<br>";