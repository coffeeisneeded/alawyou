<?php  
session_start();  
  
if($_SESSION['sessusername']=="") {  
    echo "Please login before enter the webboard<META HTTP-EQUIV=Refresh content=0;URL=loginform.php>";
      
 }  
?> 