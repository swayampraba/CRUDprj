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
    <h3>Loggin Admin</h3>
  
    <?php     
     $n=$_SESSION['fn'];
    echo "Welcome " .$n."!!!<br><br> ";
    include("MenuAdmin.php");	
    ?><br><br>
 <form  method="post" enctype="multipart/form-data"  action="">
<div class="category_container">
<input  type="submit" class="category_item" id="all" name="all1" value="all"/>
<input  type="submit" class="category_item" id="seminar" name="pending" value="Pending"/>
<input  type="submit" class="category_item" id="workshops" name="approve" value="Approve LIst"/>
<input  type="submit"class="category_item" id="internships" name="disapprove" value="Disapprove List"/>
</div>  
</form>
  <h4 style="color:red;">Status Cart Report</h4><br>
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
        <th>Action </th>
        </tr>
        <?php

if(isset($_POST['all1'])){
$qry = "select * from bookingtab";
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
        <td><?php echo "<a href='admCfrm.php?id=".$row['id']."'>Edit</a>"; ?></td>
      </tr>

      <?php }
       }
       elseif(isset($_POST['pending'])){
        $qry = "select * from bookingtab where status='Pending'";
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
        <td><?php echo "<a href='admCfrm.php?id=".$row['id']."'>Edit</a>"; ?></td>
      </tr> 
      <?php
                }
                }elseif(isset($_POST['approve'])){
     
                    $qry = "select * from bookingtab where status='Approved'";
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
        <td><?php echo "<a href='admCfrm.php?id=".$row['id']."'>Edit</a>"; ?></td>
      </tr> 
      <?php
                }
                }elseif(isset($_POST['disapprove'])){
     
                    $qry = "select * from bookingtab where status='Disapproved'";
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
        <td><?php echo "<a href='admCfrm.php?id=".$row['id']."'>Edit</a>"; ?></td>
      </tr> 
      <?php
                }
                }?>

    </table>
   
   </center><br>
</body>
</html>
<?php

include("footer.php");	

?>