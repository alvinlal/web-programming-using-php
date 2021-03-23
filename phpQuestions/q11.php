<?php

$n = 74805;
$rev = 0;

echo "The number is $n <br>";

while ((int) $n > 0) {
	$r = $n % 10;
	$rev = ($rev * 10) + $r;
	$n = $n / 10;
}

echo "The reverse of the number is $rev";