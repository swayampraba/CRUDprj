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
<body><center>
<br>
    <h3>Login User</h3>
  
    <?php     
     $n=$_SESSION['fn'];
    echo "Welcome " .$n."!!!<br><br> ";
    include("MenuUsr.php");	
    ?><br><br>

  <h4 style="color:red;">Catalog View</h4><br>
   </center>
   <h1 >
             <?php 
   $pcode=$_SESSION['pcode'];
    echo "<center><h2 class='h1a'>Welcome to Product Catalog !!!</h2></center>";
    ?></h1>
 

     <center> 
      
     <div class="container">   
     <div class="row">

               <?php
      $sql="select distinct * from catalogtab";
	  $res=mysqli_query($connection,$sql);
      while($row=mysqli_fetch_array($res))
    
	  {?>


  <div class="col-sm-3">
  <figure >
             <figcaption> 
             <?php echo $row['pname'];?></figcaption>
				<img  src="<?php echo $row['pimg'];?>" alt="hi" height="100" width="100">
					<div>
						
							<h5 ><?php echo $row['pcode'];?></h5>
							<h6 ><?php echo $row['pdes'];?></h6>
					
					</div>
					<div>						
						<a href="<?php echo $row['pimg'];?>" target="_blank" >
                        <button  >View Large</button>					
                            </a>
					</div>					
			
           </figure>
  </div>
  

 
      
		
            
	  
 
    <?php  }

	  ?>               
</div>
</div>
</center><br><br>
</body>
</html>
<?php

include("footer.php");	

?>