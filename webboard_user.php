<html>

<head>
  <meta charset="UTF-8">
  <title>ALAW YOU : Webboard Community</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="boostrap/bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- topnav and searching box -->
  <div class="topnav">
    <a href="index_user.html">Home</a>
    <a href="webboard_user.php">Webboard</a>
    <a class="b" href="member_page.php">View Profile</a>
    <a class="b" href="logout.php">Log out</a>
  </div>

  <div class="wallpaper">
    <div class="center">
      <h style="font-size:40pt; color:white">
        ALAW YOU : WEBBOARD COMMUNITY
      </h>
    </div>
    <div class="webboard">
      <a href="NewQuestion_user.php">New Topic</a>
      <?php
      $con = mysqli_connect("localhost", "root", "", "alawyou");
      $objDB = mysqli_select_db($con, "alawyou");
      $strSQL = "SELECT * FROM webboard ";
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

      $strSQL .= " order  by QuestionID DESC LIMIT $Page_Start , $Per_Page";
      $objQuery  = mysqli_query($con, $strSQL);
      ?>
      <!-- q&a table -->
      <div>
        <table class="table">
          <thread>
            <tr>
              <th scope="col">
                <div align="center">QuestionID</div>
              </th>
              <th scope="col">
                <div align="center">Question</div>
              </th>
              <th scope="col">
                <div align="center">Name</div>
              </th>
              <th scope="col">
                <div align="center">Create Date</div>
              </th>
              <th scope="col">
                <div align="center">View</div>
              </th>
              <th scope="col">
                <div align="center">Reply</div>
              </th>
            </tr>
          </thread>
          <?php
          while ($objResult = mysqli_fetch_array($objQuery)) {
          ?>
            <tbody>
              <tr>
                <th scope="row">
                  <div align="center"><?php echo $objResult["QuestionID"]; ?></div>
                </th>
                <th scope="row">
                  <a href="ViewWebboard_user.php?QuestionID=<?php echo $objResult["QuestionID"]; ?>"><?php echo $objResult["Question"]; ?></a>
                </th>
                <th scope="row">
                  <?php echo $objResult["Name"]; ?>
                </th>
                <th scope="row">
                  <div align="center"><?php echo $objResult["CreateDate"]; ?></div>
                </th>
                <th scope="row">
                  <div align="right">
                    <?php echo $objResult["View"]; ?>
                  </div>
                </th>
                <th scope="row">
                  <div align="right">
                    <?php echo $objResult["Reply"]; ?>
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