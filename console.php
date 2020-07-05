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
							<li class="dropdown ">

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
							<li class="dropdown active active1">
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

	<!-- Carousel
    ================================================== -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<a href="gaminggear.php"><img class="first-slide" src="images/ba2.jpg" alt="First slide" width="1100px" height="500px"></a>

			</div>
			<div class="item">
				<a href="gaminggear.php"><img class="second-slide " src="images/ba.jpg" alt="Second slide" width="1100px" height="500px"></a>

			</div>
			<div class="item">
				<a href="console.php"> <img class="third-slide " src="images/ba1.jpg" alt="Third slide" width="1100px" height="500px"></a>

			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>

	</div><!-- /.carousel -->

	<!--content-->
	<div class="kic-top ">
		<div class="container ">
			<div class="kic ">
				<h3>Top Selling</h3>

			</div>
			<div class="col-md-4 kic-top1">
				<a href="single.php">
					<img src="images/ki6.jpg" class="img-responsive" alt="">
				</a>
				<h6>SONY PlayStation 4 Pro 1TB MASTER</h6>
				<p>11,290,000 VND</p>
			</div>
			<div class="col-md-4 kic-top1">
				<a href="single.php">
					<img src="images/ki7.jpg" class="img-responsive" alt="">
				</a>
				<h6>SONY Playstation 4 Slim 1TB MASTER</h6>
				<p>8,790,000 VND</p>
			</div>
			<div class="col-md-4 kic-top1">
				<a href="single.php">
					<img src="images/ki8.jpg" class="img-responsive" alt="">
				</a>
				<h6>Microsoft XBOX One X 1TB White</h6>
				<p>12,880,000 VND</p>
			</div>
		</div>
	</div>

	<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Products</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class=" con-w3l agileinf">
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
							<img src="images/of12.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>SONY PlayStation 4 Pro 2TB MASTER</h6>
							</div>
							<div class="mid-2">
								<p><label>12,890,000</label><em class="item_price">12,690,000 VND</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="SONY PlayStation 4 Pro 2TB" data-summary="summary 13" data-price="12690000" data-quantity="1" data-image="images/of12.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
							<img src="images/of13.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>SONY PlayStation 4 Pro 1TB MASTER</h6>
							</div>
							<div class="mid-2">
								<p><label>11,490,000</label><em class="item_price">11,290,000 VND</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="SONY PlayStation 4 Pro 1TB" data-summary="summary 14" data-price="11290000" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
							<img src="images/of14.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>SONY Playstation 4 Slim 1TB MASTER</h6>
							</div>
							<div class="mid-2">
								<p><label>8,990,000</label><em class="item_price">8,790,000 VND</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="SONY Playstation 4 Slim 1TB" data-summary="summary 15" data-price="8790000" data-quantity="1" data-image="images/of14.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
							<img src="images/of15.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>SONY Dualshock4 Controller Black</h6>
							</div>
							<div class="mid-2">
								<p><label>1,350,000</label><em class="item_price">1,090,000 VND</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="SONY Dualshock4 Controller" data-summary="summary 16" data-price="1090000" data-quantity="1" data-image="images/of15.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>

				<p><br /> . <br /></p>

				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
							<img src="images/of52.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>Microsoft XBOX One X 1TB Black</h6>
							</div>
							<div class="mid-2">
								<p><label>14,000,000</label><em class="item_price">12,880,000 VND</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="17" data-name="Microsoft XBOX One X 1TB Black" data-summary="summary 17" data-price="12880000" data-quantity="1" data-image="images/of52.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
							<img src="images/of23.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>Microsoft XBOX One X 1TB White</h6>
							</div>
							<div class="mid-2">
								<p><label>14,000,000</label><em class="item_price">12,880,000 VND</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="18" data-name="Microsoft XBOX One X 1TB White" data-summary="summary 18" data-price="12880000" data-quantity="1" data-image="images/of23.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
							<img src="images/of54.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>Microsoft XBOX Elite Controller 2</h6>
							</div>
							<div class="mid-2">
								<p><label>5,000,000</label><em class="item_price">4,650,000 VND</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="21" data-name="Microsoft XBOX Elite Controller 2" data-summary="summary 21" data-price="4650000" data-quantity="1" data-image="images/of54.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
							<img src="images/of55.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>Microsoft XBOX One Controller White</h6>
							</div>
							<div class="mid-2">
								<p><label>1,790,000</label><em class="item_price">1,490,000 VND</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="22" data-name="Microsoft XBOX One Controller" data-summary="summary 22" data-price="1490000" data-quantity="1" data-image="images/of55.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!--
								<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
										<img src="images/of56.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php"> Container</a>(1 pc)</h6>							
										</div>
										<div class="mid-2">
											<p ><label>$7.00</label><em class="item_price">$6.00</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="56" data-name="Container" data-summary="summary 56" data-price="6.00" data-quantity="1" data-image="images/of56.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
										<img src="images/of57.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php">Scrub Sponge</a>(100 g)</h6>							
										</div>
										<div class="mid-2">
											<p ><label>$5.00</label><em class="item_price">$4.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="57" data-name="Scrub Sponge" data-summary="summary 57" data-price="4.50" data-quantity="1" data-image="images/of57.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
										<img src="images/of58.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php">Reindeer </a>(1 pc)</h6>							
										</div>
										<div class="mid-2">
											<p ><label>$4.00</label><em class="item_price">$3.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="58" data-name="Xmas Reindeer" data-summary="summary 58" data-price="3.50" data-quantity="1" data-image="images/of58.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
										<img src="images/of59.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php"> Cleaner</a>(1 pc)</h6>							
										</div>
										<div class="mid-2">
											<p ><label>$1.00</label><em class="item_price">$0.80</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="59" data-name="Cleaner" data-summary="summary 59" data-price="0.80" data-quantity="1" data-image="images/of59.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>-->
				<div class="clearfix"></div>
			</div>

			<div style="display: block; margin-left: 39%; align-content: center; align-items: center; align-self: center;">
				<ul class="pagination center-block">
					<li class="disabled"><a href="#">Previous</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>

		</div>
	</div>
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
					<!--<li><a href="codes.php">Short Codes</a></li>-->
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




	<!-- product -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of12.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>SONY PlayStation 4 Pro 2TB MASTER</h3>
						<p class="in-para">HEIGHTEN YOUR EXPERIENCES. ENRICH YOUR ADVENTURES. <br />
							Let the super-charged PS4 Pro lead the way.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>12,890,000</del> 12,690,000 VND</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">
							Gift included: <br />
							1 SONY Dualshock4 Controller. <br />
							3 game discs: Rachet & Clank, The last of Us, Uncharted 4.
						</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="13" data-name="SONY PlayStation 4 Pro 2TB" data-summary="summary 13" data-price="12690000" data-quantity="1" data-image="images/of12.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of13.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>SONY PlayStation 4 Pro 1TB MASTER</h3>
						<p class="in-para">HEIGHTEN YOUR EXPERIENCES. ENRICH YOUR ADVENTURES. <br />
							Let the super-charged PS4 Pro lead the way.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>11,490,000</del> 11,290,000 VND</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">
							Gift included: <br />
							1 SONY Dualshock4 Controller. <br />
							2 game discs: God Of War, The last of Us.
						</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="SONY PlayStation 4 Pro 1TB" data-summary="summary 14" data-price="11290000" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of14.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>SONY Playstation 4 Slim 1TB MASTER</h3>
						<p class="in-para">INCREDIBLE GAMES. ENDLESS ENTERTAINMENT. <br />
							Introducing the PlayStation 4 Slim with 1TB hard drive. <br />
							All the greatest games, TV, music and more.
						</p>
						<div class="price_single">
							<span class="reducedfrom "><del>8,990,000</del> 8,790,000 VND</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">
							Gift included: <br />
							3 game discs: God Of War, The last of Us, Horizone Zero Dawn.
						</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="15" data-name="SONY Playstation 4 Slim 1TB" data-summary="summary 15" data-price="8790000" data-quantity="1" data-image="images/of14.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of15.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>SONY Dualshock4 Controller Black</h3>
						<p class="in-para">The DUALSHOCK®4 Wireless Controller for PlayStation®4 defines this generation of play, combining revolutionary features and comfort with intuitive, precision controls. Evolved analog sticks and trigger buttons allow for unparalleled accuracy with every move while innovative technologies offer exciting ways to experience your games and share your greatest moments.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>1,350,000</del> 1,090,000 VND</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="16" data-name="SONY Dualshock4 Controller" data-summary="summary 16" data-price="1090000" data-quantity="1" data-image="images/of15.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of52.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Microsoft XBOX One X 1TB Black</h3>
						<p class="in-para">Xbox One X 1TB console | Xbox wireless controller | 4K Gaming | 4K Blu-ray | 4K video streaming | HDR.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>14,000,000</del> 12,880,000 VND</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">
							True 4K Gaming: <br />
							6 teraflops of graphical processing power and 4K Blu-ray™ provide more immersive gaming and entertainment. <br />
							High Dynamic Range: <br />
							Enjoy brilliant graphic details with High Dynamic Range and Wide Color Gamut. <br />
							Spatial Audio: <br />
							Dolby Atmos enables you to experience truly immersive audio that puts you in the center of 3D spatial sound. <br />
						</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="17" data-name="Microsoft XBOX One X 1TB Black" data-summary="summary 17" data-price="12880000" data-quantity="1" data-image="images/of52.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of23.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Microsoft XBOX One X 1TB White</h3>
						<p class="in-para">Own the Xbox One X Robot White Special Edition 1TB and get 4K Ultra HD Blu-ray™, 4K video streaming, premium audio, and an Xbox wireless controller.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>14,000,000</del> 12,880,000 VND</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">
							True 4K Gaming: <br />
							6 teraflops of graphical processing power and 4K Blu-ray™ provide more immersive gaming and entertainment. <br />
							High Dynamic Range: <br />
							Enjoy brilliant graphic details with High Dynamic Range and Wide Color Gamut. <br />
							Spatial Audio: <br />
							Dolby Atmos enables you to experience truly immersive audio that puts you in the center of 3D spatial sound. <br />
						</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="18" data-name="Microsoft XBOX One X 1TB White" data-summary="summary 18" data-price="12880000" data-quantity="1" data-image="images/of23.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of54.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Microsoft XBOX Elite Controller 2</h3>
						<p class="in-para">Adjustable-tension thumbsticks | Shorter hair trigger locks | Wrap-around rubberized grip | Re-engineered components.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>5,000,000</del> 4,650,000 VND</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">
							Built for performance: <br />
							Designed to meet the needs of today’s competitive gamers, the all-new Xbox Elite Wireless Controller Series 2 features over 30 new ways to play like a pro. Enhance your aiming with new adjustable-tension thumbsticks, fire even faster with shorter hair trigger locks, and stay on target with a wrap-around rubberized grip. <br /> <br />
							Optimized for you: <br />
							Tailor the controller to your preferred gaming style with new interchangeable thumbstick and paddle shapes. Save up to 3 custom profiles and 1 default profile on the controller and switch between them on the fly with the Profile button. Use Xbox Wireless, Bluetooth, or the included USB-C cable to play across your Xbox One and Windows 10 devices. <br /> <br />
							More ways to customize: <br />
							Experience limitless customization with the Xbox Accessories app. Utilize exclusive configuration options such as button mapping to voice commands such as “record that” or “take a screenshot”. Assign a button to act as a ‘Shift key’ to enable alternative inputs for each of the other buttons. <br /> <br />
							Designed for extended gameplay: <br />
							Stay in the game with up to 40 hours of rechargeable battery life and refined components that are built to last. Charge the controller either inside or outside the carrying case with the included USB-C cable and charging dock.
						</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="21" data-name="Microsoft XBOX Elite Controller 2" data-summary="summary 21" data-price="4650000" data-quantity="1" data-image="images/of54.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of55.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Microsoft XBOX One Controller White</h3>
						<p class="in-para">Textured Grip | Button Mapping | 3.5mm stereo headset jack | Bluetooth® technology.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>1,790,000</del> 1,490,000 VND</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">
							Equip yourself with the Xbox Wireless Controller, featuring a sleek, streamlined design and textured grip for enhanced comfort. Enjoy custom button mapping and up to twice the wireless range. Plug in any compatible headset with the 3.5mm stereo headset jack. And with Bluetooth® technology, play your favorite games on Windows 10 PCs, laptops, and mobile devices.
						</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="22" data-name="Microsoft XBOX One Controller White" data-summary="summary 22" data-price="1490000" data-quantity="1" data-image="images/of55.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>

	<!--
			<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of56.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Container(1 pc)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$2.00</del>$1.50</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="56" data-name="Container" data-summary="summary 56" data-price="1.50" data-quantity="1" data-image="images/of56.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				
			<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of57.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Scrub Sponge(100 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$1.00</del>$0.70</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="57" data-name="Scrub Sponge" data-summary="summary 57" data-price="0.70" data-quantity="1" data-image="images/of57.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				
			<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of58.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Xmas Reindeer (1 pc)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$2.00</del>$1.00</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="58" data-name="Xmas Reindeer" data-summary="summary 58" data-price="1.00" data-quantity="1" data-image="images/of58.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				
			<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of59.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Cleaner(1 pc)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$4.00</del>$3.50</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="59" data-name="Cleaner" data-summary="summary 59" data-price="3.50" data-quantity="1" data-image="images/of59.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
	-->

</body>

</html>