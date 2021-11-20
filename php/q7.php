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
	$query = "SELECT * FROM studentDetails WHERE id=1";

	$result = mysqli_query($conn, $query);

	$data = mysqli_fetch_assoc($result);

	$firstname = $data['firstname'];
	$lastname = $data['lastname'];
	$housename = $data['housename'];
	$pincode = $data['pincode'];
	$phno = $data['phno'];

	if (isset($_POST['submit'])) {
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$housename = $_POST['hname'];
		$pincode = $_POST['pin'];
		$phno = $_POST['phno'];

		$query = "UPDATE studentDetails SET firstname='$firstname',lastname='$lastname',housename='$housename',pincode='$pincode',phno='$phno' WHERE id=1";

		if (!mysqli_query($conn, $query)) {
			echo ("Cannot update to db " . mysqli_error($conn));
			die();
		} else {
			$updated = true;
		}
	}
?>

<html>

<head>
    <title>Update Records</title>
</head>

<body>
    <?php if (isset($updated)): ?>
    <h2>Successfully updated details</h2>
    <?php endif?>
    <form method="POST" action=<?=$_SERVER['PHP_SELF']?>>
        <label>Firstname:<input type="text" name="fname" value=<?=$firstname?> /></label><br><br>
        <label>Lastname:<input type="text" name="lname" value=<?=$lastname?> /></label><br><br>
        <label>housename:<input type="text" name="hname" value=<?=$housename?> /></label><br><br>
        <label>Pincode:<input type="number" name="pin" value=<?=$pincode?> /></label><br><br>
        <label>Phone number:<input type="number" name="phno" value=<?=$phno?> /></label><br><br>
        <button type="submit" name="submit">UPDATE</button>
    </form>
</body>

</html>