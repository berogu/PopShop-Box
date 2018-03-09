<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=products", "root", "berkanoguz");
} catch ( PDOException $e ){
     print $e->getMessage();
}

$query = $db->query("SELECT * FROM list", PDO::FETCH_ASSOC);
?>



<html>
<head>
<title>PopShop-Products</title>
<meta charset=utf-8>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/script.js"></script> 
  
  <link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.carousel.min.css"> 
<link rel="stylesheet" href="owl/dist/assets/owl.theme.default.min.css">






<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="owl/dist/owl.carousel.min.js"></script>

<style>
@media (max-width: 960px) {
  nav ul     { display: none; }
  nav select { display: inline-block; }
   
}
.owl-carousel .owl-item img{
width: 60%;
}
::-webkit-scrollbar { 
    display: none; 
}
</style>

</head>

<body>
<!--  Navbar  -->

<div class="topnav" id="myTopnav">
<div class="col-sm-8" style="text-align:center">
	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
   <a href="#about">About</a>
   <a href="#contact">Contact</a>
   <a href="#products" class="active">Products</a>
   <a href="index.html">Home</a>
</div>
</div>

<!--Navbar-End-->




<!--Left-Item-->
<div>
<div class="row" style="margin:20px 30px;">
<div class="col-md-3" style="background-color:#ddd">
<nav>
  <ul style="list-style-type:none;padding:10px 10px 0px 10px;">
    <li><p style="text-align:center;color:orangered;">Man</p></li>
    <li><hr></li>
    <li><a href="#"><p class="products-item">Shirt</p></a></li>
    <li><a href="#"><p class="products-item">T-Shirt</p></a></li>
    <li><a href="#"><p class="products-item">Sweatshirt</p></a></li>
    <li><a href="#"><p class="products-item">Jacket</p></a></li>
    <li><a href="#"><p class="products-item">Shoe</p></a></li>
    <li><a href="#"><p class="products-item">Accessesuar</p></a></li>
    <li><a href="#"><p class="products-item">Jean</p></a></li>
    <li><a href="#"><p class="products-item">Polo T-Shirt</p></a></li> 
    <li><a href="#"><p class="products-item">Knitwear</p></a></li>

  </ul>
	
</nav>
</div>

<div class="col-md-6" style="height: 100%; overflow-y: scroll;">
<div class="owl-carousel owl-theme">
<img class="border-premium" src="images/index.png" alt="logo">
<img class="border-premium" src="images/index.png" alt="logo">
<img class="border-premium" src="images/index.png" alt="logo">
<img class="border-premium" src="images/index.png" alt="logo">
<img class="border-premium" src="images/index.png" alt="logo">
<img class="border-premium" src="images/index.png" alt="logo">
<img class="border-premium" src="images/index.png" alt="logo">
<img class="border-premium" src="images/index.png" alt="logo">
<img class="border-premium" src="images/index.png" alt="logo">
</div>

<!--Content-->
<?php
foreach( $query as $row ){ ?>
	<br><hr><br><p style="text-align:center;border:1px solid black;padding:5px;display:initial;">PopShop-Box</p><br><br>     
	<img src=<?php echo $row['image']?> style="width:250px;height:250px;display:inline-block"> 
        <p style="display:inline-block;text-align:center;"><?php echo $row['ProduceName']?></p>
	<p style="display:inline-block;text-align:center;"><?php echo $row['ProduceDetails']?></p>
	<p style="display:inline-block;text-align:center;"><?php echo $row['Type']?></p><br>	
	<p style="text-align:center">For Details and Buy</p>
	<a href="http://<?php echo $row['ProduceLink']?>" style="text-align:center;"><p style="text-align:center"><?php echo $row['ProduceLink']?></p></a>
<?php } ?>








<!--Content-End-->
</div>

<div class="col-md-3" style="background-color:#ddd">
<nav>
  <ul style="list-style-type:none;padding: 10px 10px 0px 10px;">
    <li><p style="text-align:center;color:orangered;">Woman</p></li>
    <li><hr></li>
    <li><a href="#"><p class="products-item back-color">Shirt</p></a></li>
    <li><a href="#"><p class="products-item">T-Shirt</p></a></li>
    <li><a href="#"><p class="products-item">Sweatshirt</p></a></li>
    <li><a href="#"><p class="products-item">Jacket</p></a></li>
    <li><a href="#"><p class="products-item">Shoe</p></a></li>
    <li><a href="#"><p class="products-item">Accessesuar</p></a></li> 
    <li><a href="#"><p class="products-item">Jean</p></a></li>
    <li><a href="#"><p class="products-item">Polo T-Shirt</p></a></li> 
    <li><a href="#"><p class="products-item" id="knitwear">Knitwear</p></a></li>
  </ul>
</nav>
</div>

</div>
</div>









<script>
$(document).ready(function() {
$('.owl-carousel').owlCarousel({
    loop:true,
    navText:['<<', '>>'],
    dots:false,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
});
});
</script>









<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>







</body>
</html>
