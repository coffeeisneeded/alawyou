<html>

<head>
  <meta charset="UTF-8">
  <title>ALAW YOU : Search Result</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="boostrap/bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- topnav and searching box -->
  <div class="topnav">
    <a href="index.html">Home</a>
    <a href="webboard.php">Webboard</a>
    <a class="b" href="loginform.php">Login</a>
    <a class="b" href="register.php">Sign up</a>
  </div>

  <div class="wallpaper">
    <div class="center">
      <h style="font-size:40pt; color:white">
        ALAW YOU : Search Result
      </h>
    </div>
    <div class="search_result">
      <?php
      $keyword = $_GET['keywordsearch'];
      $arr1 = explode(" ", $keyword); // array of keywords spliting from string from index.php


      $con = mysqli_connect("localhost", "root", "root", "alawyou");
      $objDB = mysqli_select_db($con, "alawyou");

      $strSQL = "SELECT * FROM searching WHERE ";
      foreach ($arr1 as $value) {
      	$strSQL .= "description like '%" . $value. "%' AND ";
      }
      $strSQL .= "code >= 0;";

     //echo $strSQL;

      $objQuery = mysqli_query($con, $strSQL) or die("Error Query [" . $strSQL . "]");
      $Num_Rows = mysqli_num_rows($objQuery);

      $Per_Page = 10;   // Per Page
      $Page = isset($_GET["Page"]);

      if (!isset($_GET["Page"])) {
        $Page = 1;
      }
      $Prev_Page = $Page - 1;
      $Next_Page = $Page + 1;

      $Page_Start = (($Per_Page * $Page) - $Per_Page);

      if ($Num_Rows <= $Per_Page) {
        $Num_Pages = 1;
      } else if (($Num_Rows % $Per_Page) == 0) {
        $Num_Pages = ($Num_Rows / $Per_Page);
      } else {
        $Num_Pages = ($Num_Rows / $Per_Page) + 1;
        $Num_Pages = (int)$Num_Pages;
      }

      ?>
      <!-- q&a table -->
      <div>
        <table class="table">
          <thread>
            <tr>
              <th scope="col">
                <div align="center">Code</div>
              </th>
              <th scope="col">
                <div align="center">Description</div>
              </th>
            </tr>
          </thread>
          <?php
          while ($objResult = mysqli_fetch_array($objQuery)) {
          ?>
            <tbody>
              <tr>
                <th scope="row">
                  <div align="center"><?php echo $objResult["code"]; ?></div>
                </th>
                <th scope="row">
                  <?php echo $objResult["description"]; ?>
                </th>
              </tr>
            <?php
          }
            ?>
            </tbody>
        </table>
      </div>
    </div>

    <br>
    <!-- page row -->
    Total <?php echo $Num_Rows; ?> Record : <?php echo $Num_Pages; ?> Page :
    <?php
    if ($Prev_Page) {
      echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
    }

    for ($i = 1; $i <= $Num_Pages; $i++) {
      if ($i != $Page) {
        echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
      } else {
        echo "<b> $i </b>";
      }
    }
    if ($Page != $Num_Pages) {
      echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
    }
    mysqli_close($con);
    ?>
  </div>
</body>
<footer>

</footer>

</html>