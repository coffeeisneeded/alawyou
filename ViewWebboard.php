<?php
$objConnect = mysqli_connect("localhost", "root", "", "alawyou") or die("Error Connect to Database");
$objDB = mysqli_select_db($objConnect, "alawyou");

if (isset($_GET["Action"]) == "Save") {
  //*** Insert Reply ***//
  $strSQL = "INSERT INTO reply ";
  $strSQL .= "(QuestionID,CreateDate,Details,Name) ";
  $strSQL .= "VALUES ";
  $strSQL .= "('" . $_GET["QuestionID"] . "','" . date("Y-m-d H:i:s") . "','" . $_POST["txtDetails"] . "','" . $_POST["txtName"] . "') ";
  $objQuery = mysqli_query($objConnect, $strSQL);

  //*** Update Reply ***//
  $strSQL = "UPDATE webboard ";
  $strSQL .= "SET Reply = Reply + 1 WHERE QuestionID = '" . $_GET["QuestionID"] . "' ";
  $objQuery = mysqli_query($objConnect, $strSQL);
}
?>
<html>

<head>
  <meta charset="UTF-8">
  <title>ALAW YOU : Webboard Community</title>
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
    
    <br>
    <?php
    //*** Select Question ***//
    $strSQL = "SELECT * FROM webboard  WHERE QuestionID = '" . $_GET["QuestionID"] . "' ";
    $objQuery = mysqli_query($objConnect, $strSQL) or die("Error Query [" . $strSQL . "]");
    $objResult = mysqli_fetch_array($objQuery);

    //*** Update View ***//
    $strSQL = "UPDATE webboard ";
    $strSQL .= "SET View = View + 1 WHERE QuestionID = '" . $_GET["QuestionID"] . "' ";
    $objQuery = mysqli_query($objConnect, $strSQL);
    ?>
    <div class="webboard center">
      <table class="table table-bordered">
        <thread>
          <tr>
            <th scope="col">
              <center>
                <h4><?php echo $objResult["Question"]; ?></h4>
              </center>
            </th>
          </tr>
          <tr>
            <td scope="row"><?php echo nl2br($objResult["Details"]); ?></td>
          </tr>
        </thread>
      </table>
      <div class="row">
        <div class="col-sm-8">Name : <?php echo $objResult["Name"]; ?> | Create Date : <?php echo $objResult["CreateDate"]; ?></div>
        <div class="col-sm" style="text-align:right">View : <?php echo $objResult["View"]; ?> Reply : <?php echo $objResult["Reply"]; ?></div>
      </div>
      <br>
      <?php
      $intRows = 0;
      $strSQL2 = "SELECT * FROM reply  WHERE QuestionID = '" . $_GET["QuestionID"] . "' ";
      $objQuery2 = mysqli_query($objConnect, $strSQL2) or die("Error Query [" . $strSQL . "]");
      while ($objResult2 = mysqli_fetch_array($objQuery2)) {
        $intRows++;
      ?> No : <?php echo $intRows; ?>
        <table class="table table-bordered">
          <thread>
            <tr>
              <td scope="col-sm"><?php echo nl2br($objResult2["Details"]); ?></td>
            </tr>
          </thread>
        </table>
        <div class="row">
          <div class="col-sm">Name :<?php echo $objResult2["Name"]; ?></div>
          <div class="col-sm" style="text-align:right">Create Date :<?php echo $objResult2["CreateDate"]; ?></div>
        </div>
        <br>
      <?php
      }
      ?>

      <form action="ViewWebboard.php?QuestionID=<?php echo $_GET["QuestionID"]; ?>&Action=Save" method="post" name="frmMain" id="frmMain">
        <table class="table table-bordered">
          <thread>
            <tr>
              <th scope="col">Details</th>
              <td scope="row"><textarea name="txtDetails" cols="60" rows="5" id="txtDetails"></textarea></td>
            </tr>
          </thread>
          <tbody>
            <tr>
              <th scope="col">Name</th>
              <td scope="row"><input name="txtName" type="text" id="txtName" value="" size="60"></td>
            </tr>
          </tbody>
        </table>
        <br />
        <input style="border-radius:20px;" name="btnSave" type="submit" id="btnSave" value="Submit">
        <a href="webboard.php">Back to Webboard</a>
      </form>
    </div>
  </div>
</body>
<footer></footer>

</html>
<?php
mysqli_close($objConnect);
?>