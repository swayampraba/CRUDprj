<?php
error_reporting(0);
include("connect.php");	
include("menuGen.php");
session_start();

$pid= $_POST['pid'];
$pcode = $_POST['pcode'];
$pname = $_POST['pname'];
$pdes = $_POST['pdes'];
$price= $_POST['price'];
if(isset($_FILES["pimg"]["size"])) {	
    $x = explode(".", $_FILES['pimg']['name']); 
    $ext = $x[count($x) - 1];
    $filepath = "catalog/".$pcode.".".$ext;
}
else {
    echo "Image Failed";
}

$qry = "insert into catalogtab values('$pid','$pcode','$pname','$pdes','$price','$filepath')";	
//fclose($fp);

echo $qry;
if(move_uploaded_file($_FILES['pimg']['tmp_name'], $filepath)) 
{
    }else {
        echo "Failed to Upload";
    }
if(!mysqli_query($connection, $qry)) 

{
    $msg="Failed";
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
else

{
    header("location:CatalogList.php");
        
    }		
    ?>