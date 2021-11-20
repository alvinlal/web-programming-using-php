<?php

$server = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password);

if (!$conn) {
	echo "Could not connect to mysql." . mysqli_connect_error();
} else {
	echo "Successfully connected to mysql";
}