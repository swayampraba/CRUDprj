<?php
// error_reporting(0);
include("connect.php");	
include("MenuGen.php");
session_start();  
$pid=$_GET['id'];
$n=$_SESSION['fn']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog Edit</title>
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

  <h4 style="color:red;">Catalog Updation</h4>
   <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">  
             <input type="hidden" name="pid" value="<?php echo $pid; ?>" /><br />
             
               <?php
	$query1="select * from catalogtab where pid=$pid";
	$query2=mysqli_query($connection,$query1);
	$row = mysqli_fetch_assoc($query2);
	$oldimg=$row['pimg'];
	?>
    <table>
    <tr>
    <td> <input type="text" name="pcode" value="<?php echo $row['pcode']; ?>" class="form-control input-sm" id="inputdefault" /></td>
    </tr>
    <tr>
    <td> <input type="text" name="pname" value="<?php echo $row['pname']; ?>" class="form-control input-sm" id="inputdefault" /></td>
    </tr>
    <tr>
    <td> <input type="text" name="pdes" value="<?php echo $row['pdes']; ?>" class="form-control input-sm" id="inputdefault" /></td>
    </tr>
    <tr>
    <td> <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control input-sm" id="inputdefault" /></td>
    </tr>
    <tr>
    <td> <input type="text" name="pimg" value="<?php echo $row['pimg']; ?>" class="form-control input-sm" id="inputdefault" /></td>
    </tr>
   
    <tr>
    <td>
    <img id="blah"  src="<?php echo $row['pimg']; ?>" onclick="$('#prodimg').click()"  alt="Click to edit Image" height="100px" style="width: 100px" />
         	<?php echo $row['pcode']; ?>	                                                            
          <input type="file" name="pimg" id="prodimg" value="<?php echo $row['pcode']; ?>" class="form-control input-sm" style="visibility:hidden" onChange="readURL(this, '<?php echo $row['pcode']; ?>')"/>
    </td>
    </tr>
    </table>
    <input type="submit"  value="Update" name="update"/>
    </form>
    </center>
    <br>
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
    $pid=$_POST['pid'];
        $pcode=$_POST['pcode'];	
		$pname=$_POST['pname'];
	    $pdes=$_POST['pdes'];
        $price=$_POST['price'];
       
      
         // $img=$_FILES['productimg']['name'];
         //    $isImage = 0;
        if($_FILES['pimg']['name']==""){
		 $query3="update catalogtab set pcode='$pcode',pname='$pname',pdes='$pdes', price='$price' where pid='$pid'";
		}
		else {
             $res=mysqli_query($connection,"SELECT * FROM catalogtab where pid='$pid'");
             while($row=mysqli_fetch_array($res))
             {
                 $img=$row['pimg'];
             }
               // unlink($img);
              $x = explode(".",$_FILES['pimg']['name']); 
			$ext = $x[count($x) - 1];
			$filepath = "catalog/".$pcode.".".$ext;
				$query3="update catalogtab set pcode='$pcode',pname='$pname', price='$price',pimg='$filepath'  where pid='$pid' ";
                copy($_FILES['pimg']['tmp_name'], $filepath);
                
		}
	
      
  	if(!mysqli_query($connection, $query3)) {
		echo "<script type='text/javascript'>alert('Update Failed');</script>";	
	}else{
			echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
			header("location:CatalogList.php");
		}		
	}
?>
<?php

include("footer.php");	

?>