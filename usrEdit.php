<?php
// error_reporting(0);
include("connect.php");	
include("MenuGen.php");
session_start();  
$id=$_GET['id'];
$n=$_SESSION['fn']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usr Edit</title>
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

  <h4 style="color:red;">Register's Updation</h4>
 
   <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">  
             <input type="hidden" name="id" value="<?php echo $id; ?>" /><br />
             
               <?php
	$query1="select usrid,photo,un,psd,fn,gen,dob,age,phno,mid from regtab where id='$id'";
	$query2=mysqli_query($connection,$query1);
	$row = mysqli_fetch_assoc($query2);
	$oldimg=$row['photo'];
	?>
    <table>
    <tr>
    <td>User ID:</td>
    <td> <input type="text" name="usrid" value="<?php echo $row['usrid']; ?>"  /></td>
    </tr>
    <tr>
    <td>Username </td>
    <td><input type="text" name="un" value="<?php echo $row['un']; ?>"  /></td>
    </tr>
    <tr>
    <td>Password </td>
    <td><input type="text" name="psd" value="<?php echo $row['psd']; ?>"  /></td>
    </tr>
    <tr>
    <td>Name </td>
    <td><input type="text" name="fn" value="<?php echo $row['fn']; ?>" /></td>
    </tr>
    <tr>
    <td>Gender </td>
    <td><input type="text" name="gen" value="<?php echo $row['gen']; ?>"  /></td>
    </tr>
    <tr>
    <td>DOB  </td>
    <td><input type="text" name="dob" value="<?php echo $row['dob']; ?>" /></td>
    </tr>
    <tr>
    <td>Age </td>
    <td> <input type="text" name="age" value="<?php echo $row['age']; ?>" /></td>
    </tr>
    <tr>
    <td>Phone No </td>
    <td> <input type="text" name="phno" value="<?php echo $row['phno']; ?>"  /></td>
    </tr>
    <tr>
    <td>Mail-id </td>
    <td> <input type="text" name="mid" value="<?php echo $row['mid']; ?>"  /></td>
    </tr>
    <tr>
    <td>Photo: </td>
    <td>
   <img id="blah"  src="<?php echo $row['photo']; ?>" onclick="$('#usrimg').click()"  alt="Click to edit Image" height="100px" style="width: 100px" />
         	<?php echo $row['usrid']; ?>	                                                            
          <input type="file" name="uimg" id="usrimg" value="<?php echo $row['fn']; ?>"  style="visibility:hidden" onChange="readURL(this, '<?php echo $row['usrid']; ?>')"/>
    </td>
    </tr>
    </table>
    <input type="submit"  value="Update" name="update"/>
    </form>
    </center>
    <br><br>
</body>
</html>
<script>
function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
				
                $('#blah'+id)
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php 
if(isset($_POST['update']))
{
    $id=$_POST['id'];
        $usrid=$_POST['usrid'];	
		$un=$_POST['un'];
	    $psd=$_POST['psd'];
        $fn=$_POST['fn'];
        $gen=$_POST['gen'];
        $dob=$_POST['dob'];
        $age=$_POST['age'];
        $phno=$_POST['phno']; 
        $mid=$_POST['mid']; 
         // $img=$_FILES['productimg']['name'];
         //    $isImage = 0;
        if($_FILES['uimg']['name']==""){
		 $query3="update regtab set usrid='$usrid',un='$un', psd='$psd', fn='$fn', gen='$gen', dob='$dob', age='$age',phno='$phno',mid='$mid'  where id='$id'";
		}
		else {
             $res=mysqli_query($connection,"SELECT * FROM regtab where id='$id'");
             while($row=mysqli_fetch_array($res))
             {
                 $img=$row['photo'];
             }
               // unlink($img);
              $x = explode(".",$_FILES['uimg']['name']); 
			$ext = $x[count($x) - 1];
			$filepath = "user/".$usrid.".".$ext;
				$query3="update regtab set usrid='$usrid',un='$un', psd='$psd', fn='$fn', gen='$gen', dob='$dob', age='$age',phno='$phno',mid='$mid',photo='$filepath'  where id='$id' ";
                copy($_FILES['uimg']['tmp_name'], $filepath);
                
		}
	
      
  	if(!mysqli_query($connection, $query3)) {
		echo "<script type='text/javascript'>alert('Update Failed');</script>";	
	}else{
			echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
			header("location:usrList.php");
		}		
	}
?>
<?php

include("footer.php");	

?>