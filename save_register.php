<?php require_once('connect.php'); ?>
<?php
if (trim($_POST["txtUsername"]) == "") {
	echo "Please input Username!";
	exit();
}

if (trim($_POST["txtPassword"]) == "") {
	echo "Please input Password!";
	exit();
}

if ($_POST["txtPassword"] != $_POST["txtConPassword"]) {
	echo "Password not Match!";
	exit();
}

if (trim($_POST["txtFirstname"]) == "") {
	echo "Please input Firstname!";
	exit();
}

if (trim($_POST["txtLastname"]) == "") {
	echo "Please input Lastname!";
	exit();
}

$strSQL = "SELECT * FROM user WHERE username = '" . trim($_POST['txtUsername']) . "' ";
$objQuery = mysqli_query($mysqli, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
if ($objResult) {
	echo "Username already exists!";
	echo "<a href='login.php'>Back</a>";
} else {

	$strSQL = "INSERT INTO user (username,userpass,Firstname,Lastname) VALUES ('" . $_POST["txtUsername"] . "', 
		'" . $_POST["txtPassword"] . "','" . $_POST["txtFirstname"] . "','" . $_POST["txtLastname"] . "')";
	$objQuery = mysqli_query($mysqli, $strSQL);

	echo "Register Completed!<br/>";

	echo "Go to <a href='loginform.php'>Login page</a>";
}


?>