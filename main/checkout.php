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
	$productPrices = [
		'AOC1080p75Hz' => 120,
		'LenovoIdeaPad3' => 250,
		'CorsairGamingPC' => 800,
		'RazerOranataChrome' => 100,
		'SteelSeriesRival3' => 50,
		'CorsairVoidElite' => 90,
		'' => 0,
	];

	$productImgs = array(
		'AOC1080p75Hz' => "images/product01.jpg",
		'LenovoIdeaPad3' => "images/product02.jpg",
		'CorsairGamingPC' => "images/product03.jpg",
		'RazerOranataChrome' => "images/product04.jpg",
		'SteelSeriesRival3' => "images/product05.jpg",
		'CorsairVoidElite' => "images/product06.jpg",
		'' => "https://www.transparenttextures.com/patterns/brushed-alum.png",
	);

	$ownedProducts = array(
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
	);

	$count = 0;
	if ($_SESSION['products']){
		$productsArray = unserialize($_SESSION['products']);	

		foreach ($productsArray as $productOwned) {
			if ($productOwned !== ""){
				$ownedProducts[$count] = $productOwned;
				sleep(0.05);
				$count = $count + 1;
			};
		};
	};	

	$totalPrice = 0;
	foreach ($ownedProducts as $productChecked) {
		$totalPrice = $totalPrice + $productPrices[$productChecked];
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
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 Checkout
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
			<h1 class="text-center latestitems">MAKE PAYMENT</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div id="edd_checkout_wrap" class="col-md-8 col-md-offset-2">
		<form id="edd_checkout_cart_form" method="post">
			<div id="edd_checkout_cart_wrap">
				<table id="edd_checkout_cart" class="ajaxed">
				<thead>
				<tr class="edd_cart_header_row">
					<th class="edd_cart_item_name">
						 Item Name
					</th>
					<th class="edd_cart_item_price">
						 Item Price
					</th>
					<th class="edd_cart_actions">
						 Actions
					</th>
				</tr>
				</thead>
				<tbody>
				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<form action="../remove.php" method="POST">	
					</form>
				</tr>

				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="25" height="25" src=<?= $productImgs[$ownedProducts[0]] ?> alt="">
						</div>
						<span class="edd_checkout_cart_item_title"><?= $ownedProducts[0] ?></span>
					</td>
					<td class="edd_cart_item_price">
						<?= $productPrices[$ownedProducts[0]] ?>
					</td>
					<td class="edd_cart_actions">
						<form action="../remove.php" method="POST">
							<button type="submit" name=<?= $ownedProducts[0] ?>>Remove</button>
						</form>
					</td>
				</tr>

				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="25" height="25" src=<?= $productImgs[$ownedProducts[1]] ?> alt="">
						</div>
						<span class="edd_checkout_cart_item_title"><?= $ownedProducts[1] ?></span>
					</td>
					<td class="edd_cart_item_price">
						<?= $productPrices[$ownedProducts[1]] ?>
					</td>
					<td class="edd_cart_actions">
						<form action="../remove.php" method="POST">
							<button type="submit" name=<?= $ownedProducts[1] ?>>Remove</button>
						</form>
					</td>
				</tr>

				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="25" height="25" src=<?= $productImgs[$ownedProducts[2]] ?> alt="">
						</div>
						<span class="edd_checkout_cart_item_title"><?= $ownedProducts[2] ?></span>
					</td>
					<td class="edd_cart_item_price">
						<?= $productPrices[$ownedProducts[2]] ?>
					</td>
					<td class="edd_cart_actions">
						<form action="../remove.php" method="POST">
							<button type="submit" name=<?= $ownedProducts[2] ?>>Remove</button>
						</form>
					</td>
				</tr>

				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="25" height="25" src=<?= $productImgs[$ownedProducts[3]] ?> alt="">
						</div>
						<span class="edd_checkout_cart_item_title"><?= $ownedProducts[3] ?></span>
					</td>
					<td class="edd_cart_item_price">
						<?= $productPrices[$ownedProducts[3]] ?>
					</td>
					<td class="edd_cart_actions">
						<form action="../remove.php" method="POST">
							<button type="submit" name=<?= $ownedProducts[3] ?>>Remove</button>
						</form>
					</td>
				</tr>
				
				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="25" height="25" src=<?= $productImgs[$ownedProducts[4]] ?> alt="">
						</div>
						<span class="edd_checkout_cart_item_title"><?= $ownedProducts[4] ?></span>
					</td>
					<td class="edd_cart_item_price">
						<?= $productPrices[$ownedProducts[4]] ?>
					</td>
					<td class="edd_cart_actions">
						<form action="../remove.php" method="POST">
							<button type="submit" name=<?= $ownedProducts[4] ?>>Remove</button>
						</form>
					</td>
				</tr>
				
				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="25" height="25" src=<?= $productImgs[$ownedProducts[5]] ?> alt="">
						</div>
						<span class="edd_checkout_cart_item_title"><?= $ownedProducts[5] ?></span>
					</td>
					<td class="edd_cart_item_price">
						<?= $productPrices[$ownedProducts[5]] ?>
					</td>
					<td class="edd_cart_actions">
						<form action="../remove.php" method="POST">
							<button type="submit" name=<?= $ownedProducts[5] ?>>Remove</button>
						</form>
					</td>
				</tr>
				
				</tbody>
				<tr class="edd_cart_footer_row">
					<th colspan="5" class="edd_cart_total">
						 Total: <span class="edd_cart_amount"><?= "$$totalPrice" ?></span>
					</th>
				</tr>
				
				</table>
			</div>
		</form>
		<div id="edd_checkout_form_wrap" class="edd_clearfix">
			<form id="edd_purchase_form" class="edd_form" action="../emailSend.php" method="POST">
				<fieldset id="edd_checkout_user_info">
					<legend>Personal Info</legend>
					<p id="edd-first-name-wrap">
						<label class="edd-label" for="edd-first">
						First Name <span class="edd-required-indicator">*</span>
						</label>
						<input class="edd-input required" type="text" name="fname" placeholder="First Name" id="edd-first" value="" required=""></br></br>
						<label class="edd-label" for="edd-last">							
						Last Name </label>
						<input class="edd-input" type="text" name="lname" id="edd-last" placeholder="Last Name" value=""></br></br>
						<label class="edd-label" for="edd-last">
						Last Name </label>
						<input class="edd-input" type="text" name="address" id="edd-last" placeholder="Address" value=""></br></br>	
					</p>
				</fieldset>
				<fieldset id="edd_purchase_submit">
					<p id="edd_final_total_wrap">
						<strong>Purchase Total:</strong>
						<span class="edd_cart_amount"><?= "$$totalPrice" ?></span>
					</p>
					<input type="hidden" name="edd_action" value="purchase">
					<input type="hidden" name="edd-gateway" value="manual">
					<input type="submit" class="edd-submit button" id="edd-purchase-button" name="order" value="Order">
				</fieldset>
			</form>
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

<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>

</body>
</html>