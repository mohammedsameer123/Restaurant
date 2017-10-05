<?php
 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))) {
 	header("location:index.html");
 	exit;
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurant</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Nattus Restaurant</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li><a href="admin_product_type.php">Categories</a></li>
      <li><a href="admin_add_product.php">Add Menu</a></li>
      <li><a href="admin_product.php">Menu Details</a></li>
      <li><a href="admin_order.php">Orders</a></li>
      <li><a href="admin_logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>
<div id="mycarousel" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item">
        <img src="https://www.w3schools.com/css/trolltunga.jpg" data-color="lightblue" title="Fiber Laser cutting" alt="Fiber Laser cutting" class="banimg">
        <div class="carousel-caption">
            <h3 class="carotext">Laser Cutting</h3>
        </div>
    </div>
    <div class="item">
        <img src="https://cdn.pixabay.com/photo/2016/03/28/12/35/cat-1285634_960_720.png" data-color="violet" title="Laser Marking" alt="Laser Marking" class="banimg">
        <div class="carousel-caption">
            <h3 class="carotext">Laser Marking</h3>
        </div>
    </div>
    <div class="item">
        <img src="media/metal_bending_carousel.jpg" data-color="firebrick" title="CNC Bending" alt="CNC Bending" class="banimg">
        <div class="carousel-caption">
            <h3 class="carotext">CNC Bending</h3>
        </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<style media="screen">
.carousel-caption {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
}
.full-screen {
 background-size: cover;
 background-position: center;
 background-repeat: no-repeat;
}
</style>
<script>
var $item = $('.carousel .item');
var $wHeight = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight);
$item.addClass('full-screen');

$('.carousel img').each(function() {
var $src = $(this).attr('src');
var $color = $(this).attr('data-color');
$(this).parent().css({
 'background-image' : 'url(' + $src + ')',
 'background-color' : $color
});
$(this).remove();
});

$(window).on('resize', function (){
$wHeight = $(window).height();
$item.height($wHeight);
});

$('.carousel').carousel({
interval: 4500,
pause: "false"
});
</script>
</body>
</html>
