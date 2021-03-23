<?php

$a = 8;
$b = 4;
$c = 2;

echo "a is $a, b is $b , c is $c <br>";

if ($a > $b) {
	if ($a > $c) {
		echo "$a is greater";
	} else {
		echo "$c is greater";
	}
} else {
	if ($b > $c) {
		echo "$b is greater";
	} else {
		echo "$c is greater";
	}
}