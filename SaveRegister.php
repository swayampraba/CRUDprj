<?php
//error_reporting(0);
include("connect.php");	
include("menuGen.php");
session_start();

$id= $_POST['id'];
$uid = $_POST['uid'];
$un = $_POST['un'];
$psd = $_POST['psd'];
$cpsd = $_POST['cpsd'];
$fn = $_POST['fn'];
$mn = $_POST['mn'];
$ln = $_POST['ln'];
$gen = $_POST['gen'];

$d = $_POST['dte'];
$m = $_POST['mon'];
$y = $_POST['yr'];
$age=$_POST['age'];

$addr = $_POST['addr'];
$mid= $_POST['mid'];
$phno= $_POST['phno'];
$dob=$d."-".$m."-".$y;   // 10-4-1999
$role=$_POST['role'];
if(isset($_FILES["uimg"]["size"])) {	
    $x = explode(".", $_FILES['uimg']['name']); 
    $ext = $x[count($x) - 1];
    $filepath = "user/".$uid.".".$ext;
}
else {
    echo "Image Failed";
}

$qry = "insert into regtab values($id,'$uid','$filepath','$un','$psd','$cpsd','$fn','$mn','$ln','$gen','$dob','$age','$addr','$phno','$mid','$role')";	
//fclose($fp);

echo $qry;
if(move_uploaded_file($_FILES['uimg']['tmp_name'], $filepath)) 
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
    header("location:RegList.php");
        
    }		