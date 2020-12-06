<?php 
session_start();
$uname = $_POST['uname'];
$upass = $_POST['upass'];

$con = mysqli_connect("localhost", "root", "root", "alawyou");
$rslogin = "SELECT * FROM user WHERE username='$uname' AND userpass='$upass'";  
$objQuery = mysqli_query($con, $rslogin) or die("Error Query [" . $rslogin . "]");
$rowlogin = mysqli_fetch_array($objQuery);  
$num_rows = mysqli_num_rows($objQuery);   //เช็คว่าค่า user และ password ที่กรอกเข้ามามีอยู่หรือไม่ ถ้าเจอก็ login ได้ 
  
if(empty($num_rows)) {  // ถ้าไม่เจอ record เลย
    echo "incorrect username or password <a href=loginform.php>Login again</a>";  
  
} else {  
    $_SESSION['sessusername'] = $rowlogin['username'];
    $_SESSION['sessfirstname'] = $rowlogin['Firstname'];
    $_SESSION['sesslastname'] = $rowlogin['Lastname'];
    //echo $_SESSION['sessusername']; 
    @header("Location:member_page.php");  // redirect ไปหน้า member_page.php
    exit;  
}
