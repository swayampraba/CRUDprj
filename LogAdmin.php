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
    <style>
    </style>
</head>
<body><center>
<br>
    <h1>Loggin Admin</h1><br>
  
    <?php     
     $n=$_SESSION['fn'];
    echo "Welcome " .$n."!!!<br>  <br>";
    include("MenuAdmin.php");	
    ?><br>

 
  
   </center>
</body>
</html>
<?php

include("footer.php");	

?>