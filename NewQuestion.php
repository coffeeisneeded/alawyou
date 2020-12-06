<?php include_once("checklogin.php"); ?>
<?php
$objConnect = mysqli_connect("localhost", "root", "", "alawyou") or die("Error Connect to Database");
$objDB = mysqli_select_db($objConnect, "alawyou");

if (isset($_POST["Action"]) == "save") {
  //*** Insert Question ***//
  $date = date("Y-m-d H:i:s");
  $question = $_POST["txtQuestion"];
  $details = $_POST["txtDetails"];
  $name = $_POST["txtName"];
  $q = "INSERT INTO webboard(CreateDate,Question,Details,Name, Reply, View) VALUES (CURRENT_TIMESTAMP,'$question','$details','$name', 0, 0);";
  if (mysqli_query($objConnect, $q)) {
    echo "successful";
  } else {
    echo "failed";
    mysqli_error($objConnect);
  }

  header("location:webboard.php");
}
?>
<html>

<head>
  <meta charset="UTF-8">
  <title>ALAW YOU : Create new topic</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="boostrap/bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="topnav">
    <a href="index.html">Home</a>
    <a href="webboard.php">Webboard</a>
    <a class="b" href="loginform.php">Login</a>
    <a class="b" href="register.php">Sign up</a>
  </div>
  <div class="wallpaper">
    <div class="webboard">
      <h4>Create new topic</h4>
      <form action="NewQuestion.php" method="post" name="frmMain" id="frmMain">
        <table class="table table-bordered">
          <input name="Action" type="hidden" value="save">
          <tr>
            <th scope="col">
              <center>Question</center>
            </th>
            <td><input name="txtQuestion" type="text" id="txtQuestion" value="" size="99"></td>
          </tr>
          <tr>
            <th scope="col">
              <center>Details</center>
            </th>
            <td><textarea name="txtDetails" cols="100" rows="10" id="txtDetails"></textarea></td>
          </tr>
          <tr>
            <th scope="col"><center>Name</center></th>
            <td width="650"><input name="txtName" type="text" id="txtName" value="" size="99"></td>
          </tr>
        </table>
        <br />
        <div>
          <input style="border-radius:20px;" name="btnSave" type="submit" id="btnSave" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
<footer></footer>

</html>
<?php
mysqli_close($objConnect);
?>