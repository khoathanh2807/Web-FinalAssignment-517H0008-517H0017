<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
// if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
// 	header("location: welcome.php");
// 	exit;
// }

// Include config file
require_once "connect_db.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Check if username is empty
	if (empty(trim($_POST["username"]))) {
		$username_err = "Please enter username.";
	} else {
		$username = trim($_POST["username"]);
	}

	// Check if password is empty
	if (empty(trim($_POST["password"]))) {
		$password_err = "Please enter your password.";
	} else {
		$password = trim($_POST["password"]);
	}

	// Validate credentials
	if (empty($username_err) && empty($password_err)) {
		// Prepare a select statement
		$sql = "SELECT id, username, password FROM users WHERE username = ?";

		if ($stmt = $conn->prepare($sql)) {
			// Bind variables to the prepared statement as parameters
			$stmt->bind_param("s", $param_username);

			// Set parameters
			$param_username = $username;

			// Attempt to execute the prepared statement
			if ($stmt->execute()) {
				// Store result
				$stmt->store_result();

				// Check if username exists, if yes then verify password
				if ($stmt->num_rows == 1) {
					// Bind result variables
					$stmt->bind_result($id, $username, $hashed_password);
					if ($stmt->fetch()) {
						if (password_verify($password, $hashed_password)) {
							// Password is correct, so start a new session
							session_start();

							// Store data in session variables
							$_SESSION["loggedin"] = true;
							$_SESSION["id"] = $id;
							$_SESSION["username"] = $username;

							// Redirect user to welcome page
							header("location: login.php");
						} else {
							// Display an error message if password is not valid
							$password_err = "The password you entered was not valid.";
						}
					}
				} else {
					// Display an error message if username doesn't exist
					$username_err = "No account found with that username.";
				}
			} else {
				echo "Oops! Something went wrong. Please try again later.";
			}

			// Close statement
			$stmt->close();
		}
	}

	// Close connection
	$conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>KT Computer Store</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Vide" />
	<meta name="keywords" content="KT Store, Computer Store, KT Computer Store, Computer Shop, KT Computer Shop, KT Shop" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	<script type="text/javascript">
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
				}).bind('starbox-value-changed', function(event, value) {
					if (starbox.hasClass('random')) {
						var val = Math.random();
						starbox.next().text(' ' + val);
						return val;
					}
				})
			});
		});
	</script>
	<!---//End-rate---->

</head>

<body>
	<a href="offer.php"><img src="images/download.png" class="img-head" alt=""></a>
	<div class="header">

		<div class="container">

			<div class="logo">
				<h1><a href="index.php"><b>T<br>H<br>E</b>KT Computer Store<span>Best Place For Building Your PC</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.php"><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>
			</div>

			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
			</div>


			<div class="nav-top">
				<nav class="navbar navbar-default">

					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li><a href="index.php" class="hyper "><span>Home</span></a></li>

							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>PC Component<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">

												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> Mainboard</i></p>
													</a></li>
												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> CPU</i></p>
													</a></li>
												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> RAM</i></p>
													</a></li>
												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> GPU</i></p>
													</a></li>

											</ul>

										</div>
										<div class="col-sm-4">

											<ul class="multi-column-dropdown">
												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> SSD</i></p>
													</a></li>
												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> HDD</i></p>
													</a></li>
												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> Power Supply</i></p>
													</a></li>
												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> PC Case</i></p>
													</a></li>
												<li><a href="pccomponent.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> Fan/Liquid Cooling</i></p>
													</a></li>

											</ul>

										</div>
										<!--<div class="col-sm-3">

											<ul class="multi-column-dropdown">
												<li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
												<li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
												<li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
												<li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>
										
											</ul>
										</div>-->
										<div class="col-sm-4">
											<a href="pccomponent.php"><img src="images/me.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">

								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>Gaming Gear<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="gaminggear.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> Monitor</i></p>
													</a></li>
												<li><a href="gaminggear.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> Keyboard</i></p>
													</a></li>
												<!--<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
												<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>-->

											</ul>

										</div>
										<div class="col-sm-4">

											<ul class="multi-column-dropdown">
												<li><a href="gaminggear.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> Mouse</i></p>
													</a></li>
												<li><a href="gaminggear.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> Headset</i></p>
													</a></li>
												<!--<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
												<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>-->

											</ul>

										</div>
										<!--<div class="col-sm-3">

											<ul class="multi-column-dropdown">
												<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
												<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
												<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
												<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>
										
											</ul>
										</div>-->
										<div class="col-sm-4">
											<a href="gaminggear.php"><img src="images/me1.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>Console<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="console.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> SONY PlayStaytion 4</i></p>
													</a></li>
												<li><a href="console.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> PS4 Controller</i></p>
													</a></li>
												<!--<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
												<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>-->

											</ul>

										</div>
										<div class="col-sm-4">

											<ul class="multi-column-dropdown">
												<li><a href="console.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> Microsoft XBOX One</i></p>
													</a></li>
												<li><a href="console.php">
														<p style="font-size: 120%;"><i class="fa fa-angle-right"> XBOX Controller</i></p>
													</a></li>
												<!--<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
												<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>-->

											</ul>

										</div>
										<!--<div class="col-sm-3">

											<ul class="multi-column-dropdown">
												<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
												<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
												<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
												<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
										
											</ul>
										</div>-->
										<div class="col-sm-4">
											<a href="console.php"><img src="images/me2.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>Used Product<b class="caret"></b></span></a>

								<ul style="min-width: 300px;" class="dropdown-menu multi multi3">
									<div style=" padding-left: 20px;" class="row">
										<!-- <div class="col-sm-12"> -->
										<ul class="multi-column-dropdown">
											<li><a href="usedproduct.php">
													<p style="font-size: 140%;"><i class="fa fa-angle-right"> Buy Used Product</i></p>
												</a></li>
											<br />
											<li><a href="sellusedproduct.php">
													<p style="font-size: 140%;"><i class="fa fa-angle-right"> Sell Your Used Product</i></p>
												</a></li>
										</ul>
										<!-- </div> -->

										<!-- <div class="clearfix"></div> -->
									</div>
								</ul>

							</li>

							<!--<li><a href="codes.php" class="hyper"> <span>Codes</span></a></li>-->
							<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
				</nav>
				<div class="cart">

					<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!---->
	<!--banner-->
	<div class="banner-top">
		<div class="container">
			<h3>Login</h3>
			<h4><a href="index.php">Home</a><label>/</label>Login</h4>
			<div class="clearfix"> </div>
		</div>
	</div>



	<?php
	if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
	?>
		<div class="text-center" style="margin: 100px 0;">
			<div class="page-header">
				<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
			</div>
			<p>
				<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
				<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
			</p>
		</div>
	<?php
	} ?>



	<?php
	// Check if the user is logged in, if not then redirect him to login page
	if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	?>
		<!--login-->
		<div class="login">

			<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Login Your Account</h3>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
							<i class="fa fa-user" aria-hidden="true"> Username</i>
							<input type="text" class="form-control" value="<?php echo $username; ?>" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<span class="help-block"><?php echo $username_err; ?></span>
							<div class="clearfix"></div>
						</div>
						<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
							<i class="fa fa-lock" aria-hidden="true"> Password</i>
							<input type="password" name="password" class="form-control" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<span class="help-block"><?php echo $password_err; ?></span>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Login">
						</div>
					</form>
				</div>

				<div class="forg">
					<a href="#" class="forg-left">Forgot Password</a>
					<a href="register.php" class="forg-right">Register New Account</a>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	<?php
	} ?>


	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-grid">
				<h3>About Us</h3>
				<p>KT Computer Store - Best place for buying Computer Components and Gaming Gears with a really low price.</p>
			</div>
			<div class="col-md-3 footer-grid ">
				<h3>Menu</h3>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="pccomponent.php">PC Component</a></li>
					<li><a href="gaminggear.php">Gaming Gear</a></li>
					<li><a href="console.php">Console</a></li>
					<!-- <li><a href="codes.php">Short Codes</a></li> -->
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid ">
				<h3>Customer Services</h3>
				<ul>
					<li><a href="shipping.php">Shipping</a></li>
					<li><a href="terms.php">Terms & Conditions</a></li>
					<li><a href="faqs.php">FAQs</a></li>
					<li><a href="contact.php">Feedback</a></li>
					<li><a href="offer.php">Special Offer</a></li>

				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>My Account</h3>
				<ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="wishlist.php">Wishlist</a></li>

				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2><a href="index.php"><b>T<br>H<br>E</b>KT Computer Store<span>Best Place For Building Your PC</span></a></h2>
				<p class="fo-para">KT Computer Store - Best place for buying Computer Components and Gaming Gears with a really low price.</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
						<p><i class="fa fa-home" aria-hidden="true"></i>Hải Triều, Bến Nghé, Distrct 1, Hồ Chí Minh City.</p>
					</div>
					<div class="col-md-4 fo-grid1">
						<p><i class="fa fa-phone" aria-hidden="true"></i>+1234 567 890 , +0919 113 114</p>
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>KTComputerStore@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>

				</div>
			</div>
		</div>
	</div>
	<!-- //footer-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="js/jquery.mycart.js"></script>
	<script type="text/javascript">
		$(function() {

			var goToCartIcon = function($addTocartBtn) {
				var $cartIcon = $(".my-cart-icon");
				var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
					"position": "fixed",
					"z-index": "999"
				});
				$addTocartBtn.prepend($image);
				var position = $cartIcon.position();
				$image.animate({
					top: position.top,
					left: position.left
				}, 500, "linear", function() {
					$image.remove();
				});
			}

			$('.my-cart-btn').myCart({
				classCartIcon: 'my-cart-icon',
				classCartBadge: 'my-cart-badge',
				affixCartIcon: true,
				checkoutCart: function(products) {
					$.each(products, function() {
						console.log(this);
					});
				},
				clickOnAddToCart: function($addTocart) {
					goToCartIcon($addTocart);
				},
				getDiscountPrice: function(products) {
					var total = 0;
					$.each(products, function() {
						total += this.quantity * this.price;
					});
					return total * 1;
				}
			});

		});
	</script>

</body>

</html>