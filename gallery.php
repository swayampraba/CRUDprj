<?php
error_reporting(0);
include("connect.php");	
include("MenuGen.php");
session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gallery</title>
    </head>
    <body>
       
     <h1 class="text-center"><font color="red"> Gallery</font> </h1>
             <?php 
   $pcode=$_SESSION['pcode'];
    echo "<center><h2 class='h1a'>Welcome to Product Catalog !!!</h2></center>";
    ?>
 

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
</center>

<br>
     
</body>
</html>
<?php

include("footer.php");	

?>