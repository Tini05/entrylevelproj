<?php
require ('../config.php');
if(empty($_SESSION['email'])){
    header('Location: ../login/index.html');
}

$sql="SELECT * FROM users";
$prep=$con->prepare($sql);
$prep->execute();
$datas=$prep->fetchAll();

if ( ! (isset($_SESSION["MentionedQuestions"]))) {
	$_SESSION["MentionedQuestions"] = array();
}

if ( ! (isset($_SESSION["CurrentQuestion"]))) {
	$_SESSION["CurrentQuestion"] = "";
	$_SESSION["QuestionCount"] = 0;
}
?>

<?php 
	$questionNumber = $_SESSION["QuestionCount"]+1;
	$question1 = array("$questionNumber. How many continents are there in the world?","7");
	$question2 = array("$questionNumber. How many planets are there in the Solar System?","8");
	$question3 = array("$questionNumber. What is the most famous sport called?","Football");
	$question4 = array("$questionNumber. Which country has the biggest population?","China");
	$question5 = array("$questionNumber. What is the most famous search sngine in the world?","Google");
	$question6 = array("$questionNumber. In what year was the personal computer invented?","1974");
	$question7 = array("$questionNumber. What is the most famous social media called?","Facebook");
	$question8 = array("$questionNumber. In what year was youtube invented?","2005");
	$question9 = array("$questionNumber. In what galaxy is our Solar System?","Milky Way");
	$question10 = array("$questionNumber. What is the most famous italian food called?","Pizza");
	$question11 = array("$questionNumber. Which country first invented cars?","Germany");
	$question12 = array("$questionNumber. What is the smallest continent in the world called?","Australia");
	$question13 = array("$questionNumber. Find the Solution: (25 x 7)/5 * 2","70");
	$question14 = array("$questionNumber. What is the most famous sport called?","Football");
	$question15 = array("$questionNumber. What is Switzerland mostly known for?","Watches");
	$question16 = array("$questionNumber. What is the biggest ocean called?","The Pacific Ocean");
	$question17 = array("$questionNumber. In which content is the biggest river located?","Africa");
	$question18 = array("$questionNumber. How many countries are there in Europe?","44");
	$question19 = array("$questionNumber. What does this physics formula give: Distance/Time=","Speed");
	$question20 = array("$questionNumber. Where were the Olympics first held?","Greece");
	$questionToAsk = "";
?>	

<?php 
							if ($_SESSION["CurrentQuestion"] == "") {
								if ($_SESSION["QuestionCount"] < 5){
									$randomQuestion = rand(1,20);
									$_SESSION["CurrentQuestion"] = $randomQuestion;

									do{
										$randomQuestion = rand(1,20);
									} while (array_search($randomQuestion,$_SESSION["MentionedQuestions"],true)); 

									if ($randomQuestion = 1) {
										$questionToAsk = $question1[0];
										$_SESSION["CurrentAnswer"] = $question1[1];
									}
									else if ($randomQuestion = 2) {
										$questionToAsk = $question2[0];
										$_SESSION["CurrentAnswer"] = $question2[1];
									}
									else if ($randomQuestion = 3) {
										$questionToAsk = $question3[0];
										$_SESSION["CurrentAnswer"] = $question3[1];
									}
									else if ($randomQuestion = 4) {
										$questionToAsk = $question4[0];
										$_SESSION["CurrentAnswer"] = $question4[1];
									}
									else if ($randomQuestion = 5) {
										$questionToAsk = $question5[0];
										$_SESSION["CurrentAnswer"] = $question5[1];
									}
									else if ($randomQuestion = 6) {
										$questionToAsk = $question6[0];
										$_SESSION["CurrentAnswer"] = $question6[1];
									}
									else if ($randomQuestion = 7) {
										$questionToAsk = $question7[0];
										$_SESSION["CurrentAnswer"] = $question7[1];
									}
									else if ($randomQuestion = 8) {
										$questionToAsk = $question8[0];
										$_SESSION["CurrentAnswer"] = $question8[1];
									}
									else if ($randomQuestion = 9) {
										$questionToAsk = $question9[0];
										$_SESSION["CurrentAnswer"] = $question9[1];
									}
									else if ($randomQuestion = 10) {
										$questionToAsk = $question10[0];
										$_SESSION["CurrentAnswer"] = $question10[1];
									}
									else if ($randomQuestion = 11) {
										$questionToAsk = $question11[0];
										$_SESSION["CurrentAnswer"] = $question11[1];
									}
									else if ($randomQuestion = 12) {
										$questionToAsk = $question12[0];
										$_SESSION["CurrentAnswer"] = $question12[1];
									}
									else if ($randomQuestion = 13) {
										$questionToAsk = $question13[0];
										$_SESSION["CurrentAnswer"] = $question13[1];
									}
									else if ($randomQuestion = 14) {
										$questionToAsk = $question14[0];
										$_SESSION["CurrentAnswer"] = $question14[1];
									}
									else if ($randomQuestion = 15) {
										$questionToAsk = $question15[0];
										$_SESSION["CurrentAnswer"] = $question15[1];
									}
									else if ($randomQuestion = 16) {
										$questionToAsk = $question16[0];
										$_SESSION["CurrentAnswer"] = $question16[1];
									}
									else if ($randomQuestion = 17) {
										$questionToAsk = $question17[0];
										$_SESSION["CurrentAnswer"] = $question17[1];
									}
									else if ($randomQuestion = 18) {
										$questionToAsk = $question18[0];
										$_SESSION["CurrentAnswer"] = $question18[1];
									}
									else if ($randomQuestion = 19) {
										$questionToAsk = $question19[0];
										$_SESSION["CurrentAnswer"] = $question19[1];
									}
									else{
										$questionToAsk = $question20[0];
										$_SESSION["CurrentAnswer"] = $question20[1];
									};
								}
								else{
									$questionToAsk = "You finished your survey very recently. Come back later to do another one...";
								};
							}
							else{
								if ($_SESSION["QuestionCount"] < 5){
									if ($_SESSION["CurrentQuestion"] = 1) {
										$questionToAsk = $question1[0];
										$_SESSION["CurrentAnswer"] = $question1[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 2) {
										$questionToAsk = $question2[0];
										$_SESSION["CurrentAnswer"] = $question2[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 3) {
										$questionToAsk = $question3[0];
										$_SESSION["CurrentAnswer"] = $question3[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 4) {
										$questionToAsk = $question4[0];
										$_SESSION["CurrentAnswer"] = $question4[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 5) {
										$questionToAsk = $question5[0];
										$_SESSION["CurrentAnswer"] = $question5[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 6) {
										$questionToAsk = $question6[0];
										$_SESSION["CurrentAnswer"] = $question6[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 7) {
										$questionToAsk = $question7[0];
										$_SESSION["CurrentAnswer"] = $question7[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 8) {
										$questionToAsk = $question8[0];
										$_SESSION["CurrentAnswer"] = $question8[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 9) {
										$questionToAsk = $question9[0];
										$_SESSION["CurrentAnswer"] = $question9[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 10) {
										$questionToAsk = $question10[0];
										$_SESSION["CurrentAnswer"] = $question10[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 11) {
										$questionToAsk = $question11[0];
										$_SESSION["CurrentAnswer"] = $question11[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 12) {
										$questionToAsk = $question12[0];
										$_SESSION["CurrentAnswer"] = $question12[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 13) {
										$questionToAsk = $question13[0];
										$_SESSION["CurrentAnswer"] = $question13[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 14) {
										$questionToAsk = $question14[0];
										$_SESSION["CurrentAnswer"] = $question14[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 15) {
										$questionToAsk = $question15[0];
										$_SESSION["CurrentAnswer"] = $question15[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 16) {
										$questionToAsk = $question16[0];
										$_SESSION["CurrentAnswer"] = $question16[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 17) {
										$questionToAsk = $question17[0];
										$_SESSION["CurrentAnswer"] = $question17[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 18) {
										$questionToAsk = $question18[0];
										$_SESSION["CurrentAnswer"] = $question18[1];
									}
									else if ($_SESSION["CurrentQuestion"] = 19) {
										$questionToAsk = $question19[0];
										$_SESSION["CurrentAnswer"] = $question19[1];
									}
									else{
										$questionToAsk = $question20[0];
										$_SESSION["CurrentAnswer"] = $question20[1];
									};
								}
								else{
									$questionToAsk = "You finished your survey very recently. Come back later to do another one...";
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
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 Survey
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
			<h1 class="text-center latestitems">Earn Points!</h1>
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
		<div class="col-lg-8 col-lg-offset-2">
			<div class="done">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					Your message has been sent. Thank you!
				</div>
			</div>
			<form id="contactform">
				<div class="form">
					<form action="../answer.php" method="POST">
						<p><?= $questionToAsk ?></p>
						
						<input type="text" name="answer" placeholder="Type your Answer...">
						<button type="submit" name="answersubmit">Submit</button>
					</form>
				</div>
			</form>
		</div>
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
<script src="js/validate.js"></script>
</body>
</html>