<?php
error_reporting(0);
include("connect.php");	
include("menuGen.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<div class="container">
<div class="row text-center">
  <!-- <div class="col-sm-2">
  <h2 style="text-align:center;">  <font color="red">    Mini IA </font><br>-<br>  <font color="green">CRUD Operation</font> on
  <font color="green">Product Catalog System</font> </h2>

</div> -->
  <div class="col-sm-12">
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/b4.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h4>Tourister Bags</h4>
        <p>Online in India</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/b2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      <h4>Hand bags</h4>
        <p>With Multiple Colors</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/b3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      <h4>Official Bags</h4>
        <p>Grant Look</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

  </div>
  </div>
  <br>
<!-- Text-1 -->
<div class="container bg-light">
<div class="row">
<h3 > <font color="red"> OUR SUPPORTIVES</font> </h3>
<h5 class="text-justify text-dark">

Product catalogs are useful to several business users and groups such as sales reps, inside sales guys, buyers, store clerks, field marketers, and managers.
</h5>
</div>
</div>  <br>
<!-- Text-2 -->
<div class="container bg-light">
<div class="row">
<h3 > <font color="red"> OBJECTIVES</font> </h3>
<h5 class="text-justify text-dark">

Information such as technical information and features about products is impossible to memorize. Recording them on documents in a usable format helps the user know about a product in detail. Publishing information on product information packs that find a place on websites allows customers to know about it without a sales rep's interference.
</h5>
</div>
</div>  <br>
<!-- Image Overlay -->
<div class="container">
<div class="row">

  <div class="col-sm-3 text-center">
  <div class="card" style="width:250px; ">
  <img class="card-img-top" src="images/c1.png" alt="Card image" class="img-fluid" height="250">
  <div class="card-body">
    <h4 class="card-title">Fancy Bags</h4>
    <p class="card-text">Best Price</p>
     <a href="images/c6.jpg" target="_blank" class="btn btn-primary">View Large</a>
  </div>
</div>
  </div>
  <div class="col-sm-3 text-center">
  <div class="card" style="width:250px; ">
  <img class="card-img-top" src="images/c6.jpg" alt="Card image" class="img-fluid" height="250">
  <div class="card-body">
    <h4 class="card-title">Laptop Bags</h4>
    <p class="card-text">Good Quality</p>
    <a href="images/c6.jpg" target="_blank" class="btn btn-primary">View Large</a>
  </div>
</div>
</div>
  <div class="col-sm-3 text-center">
  <div class="card" style="width:250px; ">
  <img class="card-img-top" src="images/c3.jpg" alt="Card image" class="img-fluid" height="250">
  <div class="card-body">
    <h4 class="card-title">Trolley Bag</h4>
    <p class="card-text">Offer Ongoing</p>
    <a href="images/c3.jpg" target="_blank" class="btn btn-primary">View Large</a>
  </div>
</div>
</div>
<div class="col-sm-3 text-center">
  <div class="card" style="width:250px; ">
  <img class="card-img-top" src="images/c4.png" alt="Card image" class="img-fluid" height="250">
  <div class="card-body">
    <h4 class="card-title">Travel Bag</h4>
    <p class="card-text">Good Spacious</p>    
    <a href="images/c4.png" target="_blank" class="btn btn-primary">View Large</a>
  </div>
</div>
  </div>
</div>


</div>
<?php

include("footer.php");	

?>
</body>
</html>