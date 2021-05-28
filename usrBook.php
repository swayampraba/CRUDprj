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

  <h4 style="color:red;">Book your Product</h4><br></center>

   <div class="container">
      
 

  
           

               <?php
      $sql="select distinct * from catalogtab";
	  $res=mysqli_query($connection,$sql);?>
      <table  cellpadding="25" cellspacing="25">   
      <tr style="text-align:center;">
      <th> Id</th>
          <th>Product Code</th>
        
          <th>Product Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Catalog</th>
          <th>Click here to book</th>
          <tr> 
	<?php  while($row=mysqli_fetch_array($res))
	  {
		    ?>
       <tr>            
                    <td><?php echo $row['pid']; ?></td>  
                    <td><?php echo $row['pcode']; ?></td>                   
                    <td><?php echo $row['pname']; ?></td>
                    <td><?php echo $row['pdes']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                  
                   
                    <td><img id="blah" src="<?php echo $row['pimg']; ?>"  height="150px" alt="hi"/></td>       
                    <td ><?php echo "<a href='usrcfrm.php?id=".$row['pid']."'><button>Book NOw</a></button>"?></td>
                   
                </tr>
		
		<?php  }
           
  
   

	  ?>               


</table>


      </div>  
<br><br>
</body>
</html>
<?php

include("footer.php");	

?>