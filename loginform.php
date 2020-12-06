<?php session_start(); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ALAW YOU : Login Form</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="boostrap/bootstrap.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="webboard.php">Webboard</a>
    </div>
    <div class="wallpaper">
        <form name="frmlogin" action="login.php" method="post" class="container">
            <p> </p>
            <h3><b> Login</b></h3>
            <br>
            <p> Username &nbsp;
                <input class="searchbox" type="text" name="uname" placeholder="&nbsp; Username">
            </p>
            <p>Password &nbsp;&nbsp;
                <input class="searchbox" type="password" name="upass" placeholder="&nbsp; Password">
            </p>
            <p>
                <button name = "submit" type="submit">Login</button>
                &nbsp;&nbsp;
                <button type="reset">Reset</button>
                <br>
                Not a member yet ? <a href="register.php">Sign up</a>
            </p>
        </form>
    </div>
</body>
<footer>
</footer>

</html>