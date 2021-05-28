<?php
error_reporting(0);
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
<body>

   <center>
   <br>
    <h3>Loggin Admin</h3>
  
    <?php     
     $n=$_SESSION['fn'];
    echo "Welcome " .$n."!!!<br><br> ";
    include("MenuAdmin.php");	
    ?><br><br>

  <h4 style="color:red;">Registered List</h4><br>
   <table class="table table-hover" >   
      <tr class="thead">
       
        <th>User Id/th>       
        <th>Photo</th>
        <th>Username</th>
        <th>Password</th>
          <th>First Name</th>
          <th>Gender</th>
          <th>DOB</th>
           <th>Age</th>
           <th>Phono</th>
           <th>Mail Id</th>
            <th>Click to</th>
          <th>Click to</th>
      </tr>
      <?php
$qry = "select * from regtab";
$res = mysqli_query($connection,$qry);
while($row = mysqli_fetch_assoc($res)) { ?>
                <tr>            
                    <td><?php echo $row['usrid']; ?></td>                    
                    <td><img id="blah" src="<?php echo $row['photo']; ?>"  height="100px" style="width: 100px" alt="hi"/></td>       
                    <td><?php echo $row['un']; ?></td>
                    <td><?php echo $row['psd']; ?></td>
                    <td><?php echo $row['fn']; ?></td>
                    <td><?php echo $row['gen']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['phno']; ?></td>
                    <td><?php echo $row['mid']; ?></td>
                     
                    
                    <td><?php echo "<a href='usrEdit.php?id=".$row['id']."'>Edit</a>"; ?></td>
                    <td><?php echo "<a href='usrDel.php?id=".$row['id']."'>Delete</a>"; ?></td>
                </tr>
        <?php } ?>       
               
         
             </table>

  
   </center><br><br>
</body>
</html>
<?php

include("footer.php");	

?>