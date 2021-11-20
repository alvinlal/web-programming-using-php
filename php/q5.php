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
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$housename = $_POST['hname'];
		$pincode = $_POST['pin'];
		$phno = $_POST['phno'];

		$query = "INSERT INTO studentDetails(firstname,lastname,housename,pincode,phno) VALUES ('{$firstname}','{$lastname}','{$housename}',{$pincode},{$phno});";

		if (!mysqli_query($conn, $query)) {
			echo ("Cannot insert to db " . mysqli_error($conn));
			die();
		} else {
			$submited = true;
		}

		mysqli_close($conn);
	}

?>

</html>

<head>
    <title>Insert records</title>
</head>

<body>
    <?php if (isset($submited)): ?>
    <h2>Successfully inserted to db<h2>
            <p><?php echo "firstname : " . $firstname ?></p>
            <p><?php echo "lastname : " . $lastname ?></p>
            <p><?php echo "housename : " . $housename ?></p>
            <p><?php echo "pincode : " . $pincode ?></p>
            <p><?php echo "phone number : " . $phno ?></p>
            <?php else: ?>
            <form method="POST" action=<?=$_SERVER['PHP_SELF']?>>
                <label>Firstname:<input type="text" name="fname" required /></label><br><br>
                <label>Lastname:<input type="text" name="lname" required /></label><br><br>
                <label>housename:<input type="text" name="hname" required /></label><br><br>
                <label>Pincode:<input type="number" name="pin" required /></label><br><br>
                <label>Phone number:<input type="number" name="phno" required /></label><br><br>
                <button type="submit" name="submit">SUBMIT</button>
            </form>
            <?php endif?>
</body>

</html>