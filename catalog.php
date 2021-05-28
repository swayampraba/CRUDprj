<?php
//error_reporting(0);
include("connect.php");	
include("menuGen.php");
session_start(); 
$nqry = "select * from catalogTab";	
$nres = mysqli_query($connection,$nqry);
$pid = mysqli_num_rows($nres) + 1;	
$pcode = ($pid < 10)?"PROD0".$pid:"PROD".$pid; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
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

  <h4 style="color:red;">Product Details</h4>
<table cellpadding="10" cellspacing="15">
   
    <tr>
   
    <td><input  type="hidden" name="pid" value="<?php echo $pid;?> " /></td>
    </tr>
    <tr>
    <td>Product Code</td>
    <td>  <input type="hidden" name="pcode" value="<?php echo $pcode; ?> " />
    <input  name="" required type="text" value="<?php echo $pcode; ?>" disabled="disabled">
    </td>
    </tr>
    <tr>
    <td>Product Name</td>
    <td><input type="text" name="pname" Placeholder="Product Name"></td>
    </tr>
    <tr>
    <td>Product Description</td>
    <td><input type="text" name="pdes" Placeholder="Product Description"></td>
    </tr>
    <tr>
    <td>Price</td>
    <td><input type="text" name="price" Placeholder="Price"></td>
    </tr>
    <tr>
    <td>Product Catalog</td>
    <td><img id="blah<?php echo $pid; ?>" src="images/Picture.ico" onclick="$('#prodimg').click()"  alt="Click to Add Image" height="100px" style="width:225px" />				                                
           <input type="file" name="pimg" id="prodimg"   style="visibility:hidden" onChange="readURL(this, '<?php echo $pid; ?>')"   /></td>
    </tr>
    </table>
    <input type="Submit" name="sub" Value="Submit" >
    </form>
    </center><br>
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

include("footer.php");	

?>