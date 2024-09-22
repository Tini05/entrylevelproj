<?php
require ('../config.php');
if(empty($_SESSION['email'])){
    header('Location: ../login/index.html');
}

$sql="SELECT * FROM users";
$prep=$con->prepare($sql);
$prep->execute();
$datas=$prep->fetchAll();
?>

<?php 
	$ownershipStatus = "Purchase";
	$ownershipStatus2 = "Purchase";
	$ownershipStatus3 = "Purchase";
	$ownershipStatus4 = "Purchase";
	$ownershipStatus5 = "Purchase";
	$ownershipStatus6 = "Purchase";
	
	if ($_SESSION['products']){
		$productsArray = unserialize($_SESSION['products']);	
		$ownershipStatus = "Purchase";

		if (in_array("AOC1080p75Hz",$productsArray,TRUE)) {
			$ownershipStatus = "Owned";
		}
		else{
			$ownershipStatus = "Purchase";
		};
		print($ownershipStatus);

		$ownershipStatus2 = "Purchase";

		if (in_array("LenovoIdeaPad3",$productsArray,TRUE)) {
			$ownershipStatus2 = "Owned";
		}
		else{
			$ownershipStatus2 = "Purchase";
		};

		$ownershipStatus3 = "Purchase";

		if (in_array("CorsairGamingPC",$productsArray,TRUE)) {
			$ownershipStatus3 = "Owned";
		}
		else{
			$ownershipStatus3 = "Purchase";
		};

		$ownershipStatus4 = "Purchase";

		if (in_array("RazerOranataChrome",$productsArray,TRUE)) {
			$ownershipStatus4 = "Owned";
		}
		else{
			$ownershipStatus4 = "Purchase";
		};

		$ownershipStatus5 = "Purchase";

		if (in_array("SteelSeriesRival3",$productsArray,TRUE)) {
			$ownershipStatus5 = "Owned";
		}
		else{
			$ownershipStatus5 = "Purchase";
		};

		$ownershipStatus6 = "Purchase";

		if (in_array("CorsairVoidElite",$productsArray,TRUE)) {
			$ownershipStatus6 = "Owned";
		}
		else{
			$ownershipStatus6 = "Purchase";
		};
	};		
?>	

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>

<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
				<i class="fa fa-bars"></i>
				<span class="sr-only">Toggle navigation</span>
				</button>
				<a href="index.php" class="navbar-brand brand"> IT STORE </a>
			</div>
			<div id="navbar-collapse-02" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="propClone"><a href="index.php">Home</a></li>
					<li class="propClone"><a href="shop.php">Shop</a></li>
					<li class="propClone"><a href="checkout.php">Checkout</a></li>
					<li class="propClone"><a href="contact.php">Contact</a></li>
					<li class="propClone"><a href="account.php">Account</a></li>
					<li class="propClone"><a href="survey.php">Try Survey</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.1s">
						 Shop
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">OUR PRODUCTS</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3>AOC Monitor 1080p 75-Hz Refresh Rate</h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
							<form action="../add.php" method="POST">
								<button class="learn-more" type="submit" name="AOC1080p75Hz"><i class="fa fa-shopping-cart"></i><?= $ownershipStatus ?></button>
							</form>
						</p>
					</div>
					<span class="maxproduct"><img src="images/product01.jpg" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<h1>Restocked Monitors</h1>
					</a>
					<span class="price">
					<span class="edd_price">$119.00</span>
					</span>
				</div>
			</div>
		</div>
		<!-- /.productbox -->
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3>Lenovo IdeaPad 3</h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
						<form action="../add.php" method="POST">
								<button class="learn-more" type="submit" name="LenovoIdeaPad3"><i class="fa fa-shopping-cart"></i><?= $ownershipStatus2 ?></button>
							</form>
						</p>
					</div>
					<span class="maxproduct"><img src="images/product02.jpg" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<h1>Restocked Laptops</h1>
					</a>
					<span class="price">
					<span class="edd_price">$249.00</span>
					</span>
				</div>
			</div>
		</div>
		<!-- /.productbox -->
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3>Corsair Pre-Built Gaming PC</h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
						<form action="../add.php" method="POST">
								<button class="learn-more" type="submit" name="CorsairGamingPC"><i class="fa fa-shopping-cart"></i><?= $ownershipStatus3 ?></button>
							</form>
						</p>
					</div>
					<span class="maxproduct"><img src="images/product03.jpg" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<h1>Restocked PC's</h1>
					</a>
					<span class="price">
					<span class="edd_price">$799.00</span>
					</span>
				</div>
			</div>
		</div>
		<!-- /.productbox -->
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3>Razer Keyboard Oranata Chroma RGB</h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
						<form action="../add.php" method="POST">
								<button class="learn-more" type="submit" name="RazerOranataChrome"><i class="fa fa-shopping-cart"></i><?= $ownershipStatus4 ?></button>
							</form>
						</p>
					</div>
					<span class="maxproduct"><img src="images/product04.jpg" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<h1>Restocked Keyboards</h1>
					</a>
					<span class="price">
					<span class="edd_price">$99.00</span>
					</span>
				</div>
			</div>
		</div>
		<!-- /.productbox -->
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3>SteelSeries Rival 3</h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
						<form action="../add.php" method="POST">
								<button class="learn-more" type="submit" name="SteelSeriesRival3"><i class="fa fa-shopping-cart"></i><?= $ownershipStatus5 ?></button>
							</form>
						</p>
					</div>
					<span class="maxproduct"><img src="images/product05.jpg" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<h1>Restocked Mice</h1>
					</a>
					<span class="price">
					<span class="edd_price">$49.00</span>
					</span>
				</div>
			</div>
		</div>
		<!-- /.productbox -->
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3>Corsair Void RGB Elite Headset</h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
						<form action="../add.php" method="POST">
								<button class="learn-more" type="submit" name="CorsairVoidElite"><i class="fa fa-shopping-cart"></i><?= $ownershipStatus6 ?></button>
							</form>
						</p>
					</div>
					<span class="maxproduct"><img src="images/product06.jpg" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<h1>Restocked Headsets</h1>
					</a>
					<span class="price">
					<span class="edd_price">$89.00</span>
					</span>
				</div>
			</div>
		</div>
		<!-- /.productbox -->
	</div>
</div>
</div>
</section>

<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
			<h1 class="callactiontitle"> Promote Items Area Give Discount to Buyers <span class="callactionbutton"><i class="fa fa-gift"></i> WOW24TH</span>
			</h1>
		</div>
	</div>
</div>
</div>
</section>

<!-- FOOTER =============================-->
<div class="footer text-center">
<div class="container">
	<div class="row">
		<p class="footernote">
			 Connect with IT STORE
		</p>
		<ul class="social-iconsfooter">
			<li><a href="#"><i class="fa fa-phone"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		</ul>
		<p>
			 &copy; 2017 Your Website Name<br/>
		</p>
	</div>
</div>
</div>

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
</body>
</html>

