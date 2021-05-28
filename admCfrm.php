<?php
//error_reporting(0);
include("connect.php");	
include("MenuGen.php");
session_start();  

$id=$_GET['id'];


$n=$_SESSION['fn']; 

$query1="SELECT * FROM bookingtab WHERE id=$id";


$query2=mysqli_query($connection,$query1);
$row = mysqli_fetch_assoc($query2);   


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
    <h3>Loggin Admin</h3>
  
    <?php     
     $n=$_SESSION['fn'];
    echo "Welcome " .$n."!!!<br><br> ";
    include("MenuAdmin.php");	
    ?><br><br>

  <h4 style="color:red;">Status Updation</h4><br>
   <form method="post" action="" class="form-horizontal" enctype="multipart/form-data"> 
   <table>
   <tr>
   <td>Id </td>
   <td><input  disabled type="text" name="id" value="<?php echo $row["id"];?> " /></td>
   </tr>
   <tr>
   <td>Book Id </td>
   <td><input  disabled type="text" name="bid" value="<?php echo $row["bid"];?>" /></td>
   </tr>
   <tr>
   <td>User Id </td>
   <td><input disabled name ="usrid" type="text" value="<?php echo $row["usrid"];?>"></td>
   </tr>
   <tr>
   <td>First Name </td>
   <td><input disabled name ="fn" type="text" value="<?php echo $row["fn"];?>"></td>
   </tr>
   <tr>
   <td>Product Code</td>
   <td> <input disabled  name ="pcode" type="text" value="<?php echo $row["pcode"];?>"></td>
   </tr>
   <tr>
   <td>Product Name </td>
   <td><input disabled  name ="pname" type="text" value="<?php echo $row["pname"];?>"></td>
   </tr>
   <tr>
   <td>Specification  </td>
   <td><input disabled  name ="pdes" type="text" value="<?php echo $row["pdes"];?>"></td>
   </tr>
   <tr>
   <td>Price  </td>
   <td><input disabled  name ="price" type="text" value="<?php echo $row["price"];?>"></td>
   </tr>
   <tr>
   <td>Catalog  </td>
   
    <td><img id="blah" src="<?php echo $row['pimg']; ?>"  name="pimg" height="100px" style="width: 100px" alt="hi"/>
  				                                
         </td>
 
    
  
    </tr>
    <tr>
   <td>Status  </td>
   <td>
   <select name="status">
   <option>Select</option>
   <option value="Pending">Pending</option>
   <option value="Approved">Approved</option>
   <option value="Disapproved">Disapproved</option>
   </select>
   </td>
   </tr>
   </table>
   <br>
   <input type="submit"  value="Confirm Status" name="update"/>
  
   </form></center>
<br>
</body>
</html>
<?php 
if(isset($_POST['update']))
{
 
   $status= $_POST['status'];       

 $query3="update bookingtab set status='$status'  where id=$id";
      
	
      
  	if(!mysqli_query($connection, $query3)) {
		echo "<script type='text/javascript'>alert('Update Failed');</script>";	
	}else{
			echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
			header("location:admStatus.php");
		}		
	}
?>
<?php

include("footer.php");	

?>