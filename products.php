<?php
$x= $_GET["urun"]; 

?>

<?php

try {
     $db = new PDO("mysql:host=localhost;dbname=products", "root", "berkanoguz");
} catch ( PDOException $e ){
     print $e->getMessage();

}
if ($x == ""){
	
	$query = $db->query("SELECT * FROM list ORDER BY ProduceId DESC", PDO::FETCH_ASSOC);
} else{
			
	$query = $db->prepare("SELECT * FROM list where Type= :type");
	$query->bindParam(':type', $x, PDO::PARAM_STR);
	$query->execute();
}
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

<div class="topnav" id="myTopnav" style="background-color:#5e5d5d33">
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
<div class="col-md-3" style="background-color:#ddd;box-shadow:1px 1px 1px #19181899;border-radius:5px">
<nav>
  <ul style="list-style-type:none;padding:10px 10px 0px 10px;">
    <li><p style="text-align:center;color:orangered;">Man</p></li>
    <li><hr></li>
    <li><a href="#"><p class="products-item"id="man-shirt">Shirt</p></a></li>
    <li><a href="#"><p class="products-item"id="man-tshirt">T-Shirt</p></a></li>
    <li><a href="#"><p class="products-item"id="man-sweatshirt">Sweatshirt</p></a></li>
    <li><a href="#"><p class="products-item"id="man-jacket">Jacket</p></a></li>
    <li><a href="#"><p class="products-item"id="man-shoe">Shoe</p></a></li>
    <li><a href="#"><p class="products-item"id="man-accessesuar">Accessesuar</p></a></li>
    <li><a href="#"><p class="products-item"id="man-jean">Jean</p></a></li>
    <li><a href="#"><p class="products-item"id="man-polo">Polo T-Shirt</p></a></li> 
    <li><a href="#"><p class="products-item"id="man-knitwear">Knitwear</p></a></li>

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
	<br><hr><div style="text-align:center;"><P><span style="color:orangered">P</span> O <span style="color:orangered">P</span></p><p>B <span style="color:orangered">O</span> X</p><hr></div>     
	<img src=<?php echo $row['image']?> style="width:250px;height:250px;display:inline-block"> 
        <p style="display:inline-block;text-align:center;"><?php echo $row['ProduceName']?></p>
	<p style="display:inline-block;text-align:center;"><?php echo $row['ProduceDetails']?></p>
	<p style="display:inline-block;text-align:center;"><?php echo $row['Type']?></p><br>	
	<p style="text-align:center">For Details and Buy</p>
	<a href="http://<?php echo $row['ProduceLink']?>" style="text-align:center;"><p style="text-align:center"><?php echo $row['ProduceLink']?></p></a>
<?php } ?>








<!--Content-End-->
</div>

<div class="col-md-3" style="background-color:#ddd;box-shadow:1px 1px 1px #19181899;border-radius:5px">
<nav>
  <ul style="list-style-type:none;padding: 10px 10px 0px 10px;">
    <li><p style="text-align:center;color:orangered;">Woman</p></li>
    <li><hr></li>
    <li><a href="#"><p class="products-item"id="woman-shirt">Shirt</p></a></li>
    <li><a href="#"><p class="products-item"id="woman-tshirt">T-Shirt</p></a></li>
    <li><a href="#"><p class="products-item"id="woman-sweatshirt">Sweatshirt</p></a></li>
    <li><a href="#"><p class="products-item"id="woman-jacket">Jacket</p></a></li>
    <li><a href="#"><p class="products-item"id="woman-shoe">Shoe</p></a></li>
    <li><a href="#"><p class="products-item"id="woman-accessesuar">Accessesuar</p></a></li>    <li><a href="#"><p class="products-item"id="woman-jean">Jean</p></a></li>
    <li><a href="#"><p class="products-item"id="woman-polo">Polo T-Shirt</p></a></li> 
    <li><a href="#"><p class="products-item" id="woman-knitwear">Knitwear</p></a></li>
  </ul>
</nav>
</div>

</div>
</div>

<form action="products.php" method="get">
<input type="text" name="urun" id="producefilter" value="*" style="display:none">
<input type="submit" id="send" value="send" style="display:none">
</form>
<!--Man-Product-Filter-->
<script>
$(document).ready(function(){
	$("#man-shirt").click(function(){
		$("#producefilter").val("Man-Shirt");
			$("#send").click();
});
});
</script>


<script>
$(document).ready(function(){
	$("#man-tshirt").click(function(){
		$("#producefilter").val("Man-Tshirt");
			$("#send").click();
});
});
</script>



<script>
$(document).ready(function(){
	$("#man-sweatshirt").click(function(){
		$("#producefilter").val("Man-Sweatshirt");
			$("#send").click();
});
});
</script>



<script>
$(document).ready(function(){
	$("#man-jacket").click(function(){
		$("#producefilter").val("Man-Jacket");
			$("#send").click();
});
});
</script>


<script>
$(document).ready(function(){
	$("#man-shoe").click(function(){
		$("#producefilter").val("Man-Shoe");
			$("#send").click();
});
});
</script>


<script>
$(document).ready(function(){
	$("#man-accessesuar").click(function(){
		$("#producefilter").val("Man-Accessesuar");
			$("#send").click();
});
});
</script>




<script>
$(document).ready(function(){
	$("#man-jean").click(function(){
		$("#producefilter").val("Man-Jean");
			$("#send").click();
});
});
</script>



<script>
$(document).ready(function(){
	$("#man-polo").click(function(){
		$("#producefilter").val("Man-Polo");
			$("#send").click();
});
});
</script>


<script>
$(document).ready(function(){
	$("#man-knitwear").click(function(){
		$("#producefilter").val("Man-Knitwear");
			$("#send").click();
});
});
</script>



<!--Man-Product-Filter-End-->



<!--Woman-Product-Filter-->


<script>
$(document).ready(function(){
	$("#woman-shirt").click(function(){
		$("#producefilter").val("Woman-Shirt");
			$("#send").click();
});
});
</script>


<script>
$(document).ready(function(){
	$("#woman-tshirt").click(function(){
		$("#producefilter").val("Woman-Tshirt");
			$("#send").click();
});
});
</script>


<script>
$(document).ready(function(){
	$("#woman-sweatshirt").click(function(){
		$("#producefilter").val("Woman-Sweatshirt");
			$("#send").click();
});
});
</script>




<script>
$(document).ready(function(){
	$("#woman-jacket").click(function(){
		$("#producefilter").val("Woman-Jacket");
			$("#send").click();
});
});
</script>





<script>
$(document).ready(function(){
	$("#woman-shoe").click(function(){
		$("#producefilter").val("Woman-Shoe");
			$("#send").click();
});
});
</script>








<script>
$(document).ready(function(){
	$("#woman-accessesuar").click(function(){
		$("#producefilter").val("Woman-Accessesuar");
			$("#send").click();
});
});
</script>




<script>
$(document).ready(function(){
	$("#woman-jean").click(function(){
		$("#producefilter").val("Woman-Jean");
			$("#send").click();
});
});
</script>



<script>
$(document).ready(function(){
	$("#woman-polo").click(function(){
		$("#producefilter").val("Woman-Polo");
			$("#send").click();
});
});
</script>





<script>
$(document).ready(function(){
	$("#woman-knitwear").click(function(){
		$("#producefilter").val("Woman-Knitwear");
			$("#send").click();
});
});
</script>

<!--Woman-Product-Filter-End-->












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


