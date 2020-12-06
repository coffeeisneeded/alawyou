<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<link rel="stylesheet" href="boostrap/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="default.css">
</head>

<body>
	<div class="topnav">
		<a href="index.html">Home</a>
		<a href="webboard.php">Webboard</a>
	</div>
	<div>
		<div class="wallpaper center">
			<p>
				<h2><b>SIGN UP</b></h2>
			</p>
			<div id="div_content" class="signupbox justify-content-center">
				<!--%%%%% Main block %%%%-->
				<!--Form -->
				<form action="user.php" method="post">
					&nbsp
					<h2>
						User Profile
					</h2>

					<label>First name &nbsp</label>
					<input class="searchbox" type="text" name="firstname">
					<div>

					</div>
					<label>Last name &nbsp</label>
					<input class="searchbox" type="text" name="lastname">
					<div>

					</div>
					<label>Email &nbsp</label>
					<input class="searchbox" type="text" name="email">

					<h2>
						Account Profile
					</h2>
					<label>Username &nbsp</label>
					<input class="searchbox" type="text" name="username">
					<div>

					</div>
					<label>Password &nbsp</label>
					<input class="searchbox" type="password" name="passwd">
					<div>

					</div>
					<label>Confirmed password &nbsp</label>
					<input class="searchbox" type="password" name="cpasswd">
					<div>

					</div>
					<label>User group &nbsp</label>
					<select name="usergroup">
						<?php
						//select USERGROUP_ID, USERGROUP_NAME from USERGROUP
						$q = 'select USERGROUP_ID, USERGROUP_NAME from USERGROUP;';
						if ($result = $mysqli->query($q)) {
							while ($row = $result->fetch_array()) {
								echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
							}
						} else {
							echo 'Query error: ' . $mysqli->error;
						}
						?>
					</select>
					<input type="hidden" name="page" value="adduser">
					<div class="center" style="padding-top:10px">
						<button type="submit" name="sub" value="Submit">Submit</button>
						<p style="padding-top:10px">Already have an account? <a href="login.html">Sign in</a></p>
					</div>
				</form>
			</div> <!-- end div_content -->

		</div> <!-- end div_main -->

		<footer>

		</footer>

</body>

</html>