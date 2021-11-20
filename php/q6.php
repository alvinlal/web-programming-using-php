<?php

	$server = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($server, $username, $password);

	mysqli_select_db($conn, "student");

	if (!$conn) {
		echo "Could not connect to mysql." . mysqli_connect_error();
		die();
	}

?>

</html>

<head>
    <title>Display records</title>
</head>

<body>

    <h2>Student details</h2>

    <?php
    	$query = "SELECT * FROM studentDetails;";

    	$result = mysqli_query($conn, $query);

    	$i = 1;
    	while ($row = mysqli_fetch_row($result)) {
    		echo "<h3>details of student " . $i++ . " :- </h3><br><br>";
    		echo "firstname : " . $row[0] . "<br><br>";
    		echo "lastname : " . $row[1] . "<br><br>";
    		echo "housename : " . $row[2] . "<br><br>";
    		echo "pincode : " . $row[3] . "<br><br>";
    		echo "phone number : " . $row[4] . "<br><br>";
    	}
    ?>

</body>

</html>