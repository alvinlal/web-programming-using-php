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

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$query = "DELETE FROM studentDetails WHERE id={$id}";
		if (!mysqli_query($conn, $query)) {
			echo ("Cannot delete " . mysqli_error($conn));
			die();
		} else {
			$deleted = true;
		}
	}
?>

</html>

<head>
    <title>Remove records</title>
</head>

<body>

    <h2>Student details</h2>
    <?php if (isset($deleted)): ?>
    <h2>Successfully deleted details</h2>
    <?php endif?>
    <?php
	$query = "SELECT * FROM studentDetails;";

	$result = mysqli_query($conn, $query);

	$i = 1;
	while ($row = mysqli_fetch_row($result)) {
		echo "<h3>Row " . $i++ . " :- </h3><br>";
		echo "id : " . $row[0] . "<br>";
		echo "firstname : " . $row[1] . "<br>";
		echo "lastname : " . $row[2] . "<br>";
		echo "housename : " . $row[3] . "<br>";
		echo "pincode : " . $row[4] . "<br>";
		echo "phone number : " . $row[5] . "<br>";
	}
?>
    <?="<br><br>"?>

    <form method="POST" action=<?=$_SERVER['PHP_SELF']?>>
        <label>Enter id to delete:<input type="number" name="id" /></label><br><br>
        <button type="submit" name="submit">DELETE</button>
    </form>

</body>

</html>