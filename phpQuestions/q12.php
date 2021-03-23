<?php

$num = "555";
$sum = 0;

echo "The number is $num <br>";

for ($i = 0; $i < strlen($num); $i++) {
	$sum += $num[$i];
}

echo "The sum of the digits is $sum";