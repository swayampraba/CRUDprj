<?php
// error_reporting(0);
include("connect.php");	
include("MenuGen.php");
session_start(); 
    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
<br>
    <h3>Login User</h3>
  
    <?php     
     $n=$_SESSION['fn'];
    echo "Welcome " .$n."!!!<br><br> ";
    include("MenuUsr.php");	
    ?><br><br>

 <br></center><br><br>
</body>
</html>
<?php

include("footer.php");	

?>