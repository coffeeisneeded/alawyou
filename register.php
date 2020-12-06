<html>

<head>
    <title>ALAW YOU : Register Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="boostrap/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="webboard.php">Webboard</a>
    </div>
    <div class="wallpaper">
        <form name="form1" method="post" action="save_register.php" class="container">
            <p> </p>
            <h3><b>Register</b></h3>
            <br>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th scope="col">Username</th>
                        <td scope="row">
                            <input class="searchbox" name="txtUsername" type="text" id="txtUsername" size="20">
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Password</th>
                        <td scope="row">
                            <input class="searchbox" name="txtPassword" type="password" id="txtPassword">
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Confirm Password</th>
                        <td scope="row">
                            <input class="searchbox" name="txtConPassword" type="password" id="txtConPassword">
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Firstname</th>
                        <td scope="row">
                            <input class="searchbox" name="txtFirstname" type="text" id="txtFirstname" size="30">
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Lastname</th>
                        <td scope="row">
                            <input class="searchbox" name="txtLastname" type="text" id="txtLastame" size="30">
                        </td>
                    </tr>
                </tbody>
            </table>
            <input style="border-radius:20px" type="submit" name="Submit" value="Submit">
            <p>Already have an account ? <a href="loginform.php">Sign in</a></p>
        </form>
    </div>
</body>
<footer></footer>

</html>