<?php

$names = [
	['firstName' => 'alvin',
		'secondName' => 'lal'],
	['firstName' => 'glenn',
		'secondName' => 'antony'],
	['firstName' => 'john',
		'secondName' => 'jude'],
	['firstName' => 'allen',
		'secondName' => 'joseph'],
];

foreach ($names as $name) {
	echo "Full name is {$name['firstName']} {$name['secondName']} <br>";
}