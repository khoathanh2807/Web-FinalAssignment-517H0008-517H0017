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

                                                <li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Mainboard</a></li>
                                                <li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>CPU</a></li>
                                                <li><a href="pccomponent.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>RAM</a></li>
                                                <li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>GPU</a></li>

                                            </ul>

                                        </div>
                                        <div class="col-sm-4">

                                            <ul class="multi-column-dropdown">
                                                <li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>SSD</a></li>
                                                <li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>HDD</a></li>
                                                <li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Power Supply</a></li>
                                                <li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>PC Case</a></li>
                                                <li><a href="pccomponent.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Fan/Liquid Cooling</a></li>

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
                                                <li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Monitor</a></li>
                                                <li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Keyboard</a></li>
                                                <!--<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Mouse </a></li>
												<li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Headset </a></li>-->

                                            </ul>

                                        </div>
                                        <div class="col-sm-4">

                                            <ul class="multi-column-dropdown">
                                                <li><a href="gaminggear.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Mouse</a></li>
                                                <li><a href="gaminggear.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Headset</a></li>
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
                                                <li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>SONY Play Station 4</a></li>
                                                <li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>PS4 Controller</a></li>
                                                <!--<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
												<li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>-->

                                            </ul>

                                        </div>
                                        <div class="col-sm-4">

                                            <ul class="multi-column-dropdown">
                                                <li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Microsoft XBOX One</a></li>
                                                <li><a href="console.php"><i class="fa fa-angle-right" aria-hidden="true"></i>XBOX Controller</a></li>
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

                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>Used Product<b class="caret"></b></span></a>

                                <ul class="dropdown-menu multi multi3">
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <a href="usedproduct.php">
                                                <h4>Buy Used Product</h3>
                                            </a>
                                            <br />
                                            <a href="sellusedproduct.php">
                                                <h4>Sell Your Used Product</h3>
                                            </a>

                                        </div>

                                        <!-- <div class="clearfix"></div> -->
                                    </div>
                                </ul>

                            </li>

                            <!--<li><a href="codes.php" class="hyper"> <span>Code</span></a></li>-->
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
    <div class="banner-top">
        <div class="container">
            <h3>Used Product</h3>
            <h4><a href="index.php">Home</a><label>/</label>Used Product</h4>
            <div class="clearfix"> </div>
        </div>
    </div>

    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')
    </script>
    <script src="js/jquery.vide.min.js"></script>

    <!--content-->
    <div class="product">
        <div class="container">
            <div class="spec ">
                <h3>Used Product From KT Computer</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" con-w3l">
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                            <img src="images/of4.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6>ROG Strix GeForce RTX 2080 Ti OC 11GB GDDR6</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>39,500,000</label><em class="item_price">36,990,000 VND</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add add-2">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="ROG Strix GeForce RTX 2080 Ti OC" data-summary="summary 5" data-price="36990000" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal18" class="offer-img">
                            <img src="images/of5.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6>MSI RTX 2080TI Gaming X Trio 11GB GDDR6</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>35,990,000</label><em class="item_price">33,990,000 VND</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="MSI RTX 2080TI Gaming X Trio" data-summary="summary 6" data-price="33990000" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal19" class="offer-img">
                            <img src="images/of18.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6>ASUS ROG Zenith II Extreme</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>20,000,000</label><em class="item_price">19,370,000 VND</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="19" data-name="ASUS ROG Zenith II Extreme" data-summary="summary 19" data-price="19370000" data-quantity="1" data-image="images/of18.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal20" class="offer-img">
                            <img src="images/of19.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6>MSI MEG Z390 Godlike LGA1151v2</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>15,000,000</label><em class="item_price">14,790,000 VND</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="20" data-name="MSI MEG Z390 Godlike" data-summary="summary 20" data-price="14790000" data-quantity="1" data-image="images/of19.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal21" class="offer-img">
                            <img src="images/of8.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6>ASUS ROG Strix PG27UQ 27" IPS 4K 144Hz G-Sync</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>70,000,000</label><em class="item_price">69,990,000 VND</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="ASUS ROG Strix PG27UQ" data-summary="summary 9" data-price="69990000" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal22" class="offer-img">
                            <img src="images/of10.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6>SAMSUNG QLED LC49HG90 49" 2K 144Hz</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>47,888,000</label><em class="item_price">29,990,000 VND</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="SAMSUNG QLED LC49HG90" data-summary="summary 11" data-price="29990000" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal23" class="offer-img">
                            <img src="images/of13.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6>SONY Playstation 4 Pro 1TB MASTER</h6>
                            </div>
                            <div class="mid-2">
                                <p><label>11,490,000</label><em class="item_price">11,290,000 VND</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="SONY Playstation 4 Pro 1TB" data-summary="summary 14" data-price="11290000" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal24" class="offer-img">
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