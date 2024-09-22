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
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
						 Increase Digital Sales
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
						 Purchase Products without investing
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>


<!-- STEPS =============================-->
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
			<div class="col-md-4">
				<div class="col editContent">
					<span class="numberstep"><i class="fa fa-shopping-cart"></i></span>
					<h3 class="numbertext">Choose our Products</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				<!-- /.col-md-4 -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-gift"></i></span>
					<h3 class="numbertext">Do Surveys and Get Points</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-download"></i></span>
					<h3 class="numbertext">Checkout Products</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
	<!-- LATEST ITEMS =============================-->
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">LATEST PRODUCTS</h1>
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
						<h1>New Monitor</h1>
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
						<h1>New Laptop</h1>
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
						<h1>New PC</h1>
						</a>
						<span class="price">
						<span class="edd_price">$799.00</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<!-- BUTTON =============================-->
<div class="item content">
	<div class="container text-center">
		<a href="shop.php" class="homebrowseitems">Browse All Products
		<div class="homebrowseitemsicon">
			<i class="fa fa-star fa-spin"></i>
		</div>
		</a>
	</div>
</div>
<br/>


<!-- AREA =============================-->
<div class="item content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-microphone infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">General Questions</h1>
					<p>
						 Any Products missing you want to suggest? Trouble completing the payment? Send us your message and we will answer as soon as possible!
					</p>
					<p class="text-center">
						<a href="contact.php">- Get in Touch -</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4">
				<i class="fa fa-comments infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">2 Years Guarantee</h1>
					<p>
						 Any problems with purchased products can be solved by contacting us through the website!
					</p>
					<p class="text-center">
						<a href="contact.php">- Contact Us -</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4">
				<i class="fa fa-bullhorn infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">Hire Us</h1>
					<p>
						 If you are interested in working for our company you can always check for empty spots and get in contact with our company through the website.
					</p>
					<p class="text-center">
						<a href="contact.php">- Get in Contact -</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- TESTIMONIAL =============================-->
<div class="item content">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="slide-text">
				<div>
					<h2><span class="uppercase">Great Support</span></h2>
					<img src="https://static.thenounproject.com/png/4291178-200.png" alt="Awesome Support">
					<p>
						 The support... I can only say it's awesome. You make a product and you help people out any way you can even if it means that you have to log in on their dashboard to sort out any problems that customer might have. Simply Outstanding!
					</p>
					<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
				<h1 class="callactiontitle"> Promote Products Area Give Discount to Buyers <span class="callactionbutton"><i class="fa fa-gift"></i> WOW24TH</span>
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

<!-- SCRIPTS =============================-->
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