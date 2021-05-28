<?php
// error_reporting(0);
include("connect.php");	
include("MenuGen.php");
session_start(); 
$usrid=$_SESSION['usrid']; 
  
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
    echo "Welcome " .$n."!!!<br>";
    include("MenuUsr.php");	
    ?><br><br>

  <h4 style="color:red;">Cart Status Report</h4><br>
   <table  width = "100%">
    <tr>
 <th> </th>
        <th>Id</th>
        <th>Book ID</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Product Code</th>       
        <th>Product Name</th>
        <th>Specification</th>
        <th>Price</th>
        <th>Catalog</th>   
        <th>Status </th>
        </tr>
        <?php
$qry = "select * from bookingtab where usrid= '$usrid';";
$res = mysqli_query($connection,$qry);
while($row = mysqli_fetch_assoc($res)) { ?>
    <tr>
   <td> </td>
        <td><?php echo $row['id'] ;?></td>
        <td><?php echo $row['bid'];?></td>
        <td><?php echo $row['usrid'];?></td>
        <td><?php echo $row['fn'];?></td>
         <td><?php echo $row['pcode'];?></td>
         <td><?php echo $row['pname'];?></td>
        <td><?php echo $row['pdes'];?></td>
        <td><?php echo $row['price'];?></td>       
        <td><img src="<?php echo $row['pimg'];?>" alt="hi" width="100" height="100" ></td>   
        <td><?php echo $row['status'];?></td> 
    
      </tr>
      <?php } ?>   
    </table>
   
   </center><br><br>
</body>
</html>
<?php

include("footer.php");	

?>