<!doctype html>
<html>

<?php session_start();?>
<?php 

if (!$_SESSION["sessusername"]){  //check session

   Header("Location:loginform.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{}?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>ALAW YOU : MEMBER</title>
  <link rel="stylesheet" href="boostrap/bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- topnav and searching box -->
  <div class="topnav">
    <a href="index_user.html">Home</a>
    <a href="webboard_user.php">Webboard</a>
    <a class="b" href="logout.php">Log out</a>
  </div>
  <div class="wallpaper">
    <div class="webboard">
      <?php
      
      echo "Welcome back, " . $_SESSION['sessfirstname']. " " . $_SESSION['sesslastname']. " ! <br>";

     ?>
      


    </div>
  </div>



</body>
<footer>

</footer>

</html>