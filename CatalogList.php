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

  <h4 style="color:red;">Product List</h4>
   <table class="table table-hover" >   
      <tr class="thead">
       
        <th>Product Id</th>       
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Specification</th>
          <th>Price</th>
          <th>Catalog</th>
         
            <th>Click to</th>
          <th>Click to</th>
      </tr>
      <?php
$qry = "select * from catalogtab";
$res = mysqli_query($connection,$qry);
while($row = mysqli_fetch_assoc($res)) { ?>
                <tr>            
                    <td><?php echo $row['pid']; ?></td>  
                    <td><?php echo $row['pcode']; ?></td>   
                    <td><?php echo $row['pname']; ?></td> 
                    <td><?php echo $row['pdes']; ?></td>   
                    <td><?php echo $row['price']; ?></td>                           
                    <td><img id="blah" src="<?php echo $row['pimg']; ?>"  height="100px" style="width: 100px" alt="hi"/></td>       
                    
                    <td><?php echo "<a href='CatalogEdit.php?id=".$row['pid']."'>Edit</a>"; ?></td>
                    <td><?php echo "<a href='usrDel.php?id=".$row['pid']."'>Delete</a>"; ?></td>
                     
                    
                   
                </tr>
        <?php } ?>       
               
         
             </table>
             </center><br>
</body>
</html>
<?php

include("footer.php");	

?>