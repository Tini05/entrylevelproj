<?php
require ('../config.php');
if(empty($_SESSION['email'])){
    header('Location: ../login/index.html');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

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
	
		<div id="edd_checkout_form_wrap" class="edd_clearfix">		
			<form action="../logout.php" method="POST">
			<div class="col-md-4 border-right">
				<div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="border-radius: 50%;" src=<?= $_SESSION['picture'] ?> width="90"><span style="font-weight: bold;"> <?= $_SESSION['username'] ?> </span><br/><span class="text-black-50"><?= $_SESSION['email'] ?></span><br/><br/><button type="submit" name="logout" style="background-color: transparent;"><h4 class="text-black-50">Log Out</h4></button></div>
        	</div>
			</form>
			<form id="edd_purchase_form" class="edd_form" action="../updateLogic.php" method="POST">
			<div class="row">
     	   <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6><a href="index.php" style="color: gray;">Back to home</a></h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div><br/>
                <div class="row mt-2">
					<div class="col-md-6"><input readonly type="text" class="form-control" placeholder="ID" name="id" value=<?= $_SESSION['id'] ?>></div>
                    <div class="col-md-6"><input required type="text" class="form-control" placeholder="Username" name="username" value=<?= $_SESSION['username'] ?>></div>
                </div><br/>
                <div class="row mt-3">
					<div class="col-md-6"><input required type="email" class="form-control" value=<?= $_SESSION['email'] ?> placeholder="Email" name="email"></div>
                    <div class="col-md-6"><input required type="password" class="form-control" placeholder="Password" name="password"></div>
				</div><br/>
				<div class="row mt-3">
					<div class="col-md-6"><input required type="text" class="form-control" placeholder="Image Link" value=<?= $_SESSION['picture'] ?> name="picture"></div>
				</div>
				<div class="mt-5 text-right"><button class="btn btn-primary profile-button" name="update" type="submit">Save Profile</button></div>
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