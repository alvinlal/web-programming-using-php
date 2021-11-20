<?php

$array = [
	"ages" => [5, 4, 3, 2, 1],
	"heights" => [180, 100, 120, 115, 130],
	"weights" => [20, 50, 25, 30, 40, 10],
];

echo "The array before sorting :- <br><br>";

function printArray($array) {
	foreach ($array as $key => $value) {
		echo "$key" . " : ";
		echo "[ ";
		foreach ($value as $e) {
			echo $e . ",";
		}
		echo " ]<br><br>";

	}
}

printArray($array);

echo "The array after sorting :- <br><br>";

foreach ($array as $key => $value) {
	sort($array[$key]);
}

printArray($array);