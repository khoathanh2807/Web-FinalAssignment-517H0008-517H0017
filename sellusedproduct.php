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
                            <li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>

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

                            <li class="dropdown">
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
            <h3>Sell Your Used Product</h3>
            <h4><a href="index.php">Home</a><label>/</label>Sell Your Used Product</h4>
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
                <h3>Post to Sell your used product</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ktstore_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            

            //echo $statusMsg;

            ?>

            <div class="main-agileits">
                <div class="form-w3agile">

                    <form action="add.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            Product Name:
                            <input type="text" class="form-control" value="" name="productname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Product Name';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            Image:
                            <input type="file" name="uploadfile" value="" class="form-control">
                            <?php echo $statusMsg; ?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            Price:
                            <input type="text" class="form-control" value="" name="price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Product Price';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            Discription:
                            <input type="text" class="form-control" value="" name="discription" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Product Discription';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        </div>
                        <div class="clearfix"></div>
                    </form>

                </div>

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
                            <img src="images/of.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>Intel Core i9 9900K 3.6GHz - 5GHz | 8 Cores - 16 Threads</h3>
                        <p class="in-para">16M Cache, up to 5.00 GHz.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>14,490,000</del> 12,900,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Lithography: 14 nm <br />
                            Number of Cores: 8 <br />
                            Number of Threads: 16 <br />
                            Processor Base Frequency: 3.60 GHz <br />
                            Max Turbo Frequency: 5.00 GHz <br />
                            Cache: 16 MB Intel® Smart Cache <br />
                            Bus Speed: 8 GT/s <br />
                            Max Memory Size: 128 GB <br />
                            Memory Types: DDR4-2666 <br />
                            TDP: 95 W
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Intel Core i9 9900K" data-summary="summary 1" data-price="12900000" data-quantity="1" data-image="images/of.png">Add to Cart</button>
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
                            <img src="images/of1.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>Intel Core i7 9700K 3.6GHz - 4.9GHz | 8 Cores - 8 Threads</h3>
                        <p class="in-para">12M Cache, up to 4.90 GHz.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>11,710,000</del> 9,890,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Lithography: 14 nm <br />
                            Number of Cores: 8 <br />
                            Number of Threads: 8 <br />
                            Processor Base Frequency: 3.60 GHz <br />
                            Max Turbo Frequency: 4.90 GHz <br />
                            Cache: 12 MB Intel® Smart Cache <br />
                            Bus Speed: 8 GT/s <br />
                            Max Memory Size: 128 GB <br />
                            Memory Types: DDR4-2666 <br />
                            TDP: 95 W
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="2" data-name="Intel Core i7 9700K" data-summary="summary 2" data-price="9890000" data-quantity="1" data-image="images/of1.png">Add to Cart</button>
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
                            <img src="images/of2.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>Intel Core i5 9500 3GHz - 4.4GHz | 6 Cores - 6 Threads</h3>
                        <p class="in-para">9M Cache, up to 4.40 GHz.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>6,490,000</del> 5,690,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Lithography: 14 nm <br />
                            Number of Cores: 6 <br />
                            Number of Threads: 6 <br />
                            Processor Base Frequency: 3.00 GHz <br />
                            Max Turbo Frequency: 4.40 GHz <br />
                            Cache: 9 MB Intel® Smart Cache <br />
                            Bus Speed: 8 GT/s <br />
                            Max Memory Size: 128 GB <br />
                            Memory Types: DDR4-2666 <br />
                            TDP: 65 W
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="3" data-name="Intel Core i5 9500" data-summary="summary 3" data-price="5690000" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
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
                            <img src="images/of3.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>Intel Core i3 9300 3.7GHz - 4.3GHz | 4 Cores - 4 Threads</h3>
                        <p class="in-para">8M Cache, up to 4.30 GHz.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>4,200,000</del> 3,590,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Lithography: 14 nm <br />
                            Number of Cores: 4 <br />
                            Number of Threads: 4 <br />
                            Processor Base Frequency: 3.70 GHz <br />

                            Max Turbo Frequency: 4.30 GHz <br />
                            Cache: 8 MB Intel® Smart Cache <br />
                            Bus Speed: 8 GT/s <br />
                            Max Memory Size: 64 GB <br />
                            Memory Types: DDR4-2400 <br />
                            TDP: 62 W
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="4" data-name="Intel Core i3 9300" data-summary="summary 4" data-price="3590000" data-quantity="1" data-image="images/of3.png">Add to Cart</button>
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
                            <img src="images/of4.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>ROG Strix GeForce RTX 2080 Ti OC Edition 11GB GDDR6</h3>
                        <p class="in-para">NVIDIA’s newest flagship graphics card is a revolution in gaming realism and performance. Its powerful NVIDIA Turing™ GPU architecture, breakthrough technologies, and 11 GB of next-gen, ultra-fast GDDR6 memory make it the world’s ultimate gaming GPU. </p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>39,500,000</del> 36,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            DirectX 12: Power new visual effects and rendering techniques for more lifelike gaming. <br />
                            4K: Step up to the ultimate 4K gaming experience with GeForce RTX and enjoy today’s biggest games in amazing detail. <br />
                            Axial-tech Fans feature an all-around better design and IP5X dust resistance. <br />
                            2.7-Slot Design expands cooling surface area by over 20% compared to last gen. <br />
                            MaxContact Technology allows 2X more contact with the GPU chip for improved thermal transfer. <br />
                            Auto-Extreme Technology uses automation to enhance reliability. <br />
                            Super Alloy Power II includes premium alloy chokes, solid polymer capacitors, and an array of high-current power stages to fuel Turing™’s cores. <br />
                            ASUS FanConnect II equips 2 hybrid-controlled fan headers for optimal system cooling. <br />
                            GPU Tweak II provides intuitive performance tweaking and thermal controls.
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="ROG Strix GeForce RTX 2080 Ti OC" data-summary="summary 5" data-price="36990000" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
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
                            <img src="images/of5.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>MSI RTX 2080TI Gaming X Trio 11GB GDDR6</h3>
                        <p class="in-para">NVIDIA’s newest flagship graphics card is a revolution in gaming realism and performance. Its powerful NVIDIA Turing™ GPU architecture, breakthrough technologies, and 11 GB of next-gen, ultra-fast GDDR6 memory make it the world’s ultimate gaming GPU. </p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>35,990,000</del> 33,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Core/Memory: <br />
                            Boost Clock / Memory Speed: 1755 MHz / 14 Gbps. <br />
                            11GB GDDR6. <br /> <br />
                            TORX FAN 3.0: Supremely silent: <br />
                            Dispersion fan blade: Steeper curved blade accelerating the airflow. <br />
                            Traditional fan blade: Provides steady airflow to massive heat sink below. <br />
                            Double ball bearing: Strong and lasting core for years of smooth gaming. <br /> <br />
                            TRI-FROZR Thermal Design: <br />
                            Using three of the award-winning TORX Fans 3.0 with Double Ball Bearings. <br />
                            Using groundbreaking aerodynamic techniques, the heatsink is optimized for efficient heat dissipation. <br /> <br />
                            RGB Mystic Light: <br />
                            Customize colors and LED effects with exclusive MSI software and synchronize the look & feel with other components. <br /> <br />
                            Afterburner Overclocking Utility: <br />
                            Wireless control through Android/iOS devices. <br />
                            Predator: In-game video recording. <br />
                            Kombustor: DirectX12 benchmark. <br />
                            Supports multi-GPU setups. <br /> <br />
                            Dragon Center: <br />
                            1 click to optimize all you need for smooth gaming.
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="MSI RTX 2080TI Gaming X Trio" data-summary="summary 6" data-price="33990000" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
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
                            <img src="images/of6.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>GIGABYTE RTX 2080 Gaming OC 8GB GDDR6</h3>
                        <p class="in-para">The GeForce RTX™ 2080 is powered by the all-new NVIDIA Turing™ architecture to give you incredible new levels of gaming realism, speed, power efficiency, and immersion. This is graphics reinvented.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>26,275,000</del> 22,790,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Features: <br />
                            Powered by GeForce RTX™ 2080. <br />
                            Integrated with 8GB GDDR6 256-bit memory interface. <br />
                            WINDFORCE 3X Cooling System with alternate spinning fans. <br />
                            RGB Fusion 2.0 – synchronize with other AORUS devices. <br />
                            Metal Back Plate. <br />
                            4 Years Warranty (Online registration required). <br /> <br />
                            Core Clock: <br />
                            1830 MHz in OC mode. <br />
                            1815 MHz in Gaming mode. <br />
                            (Reference Card: 1710 MHz).
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="GIGABYTE RTX 2080 Gaming OC" data-summary="summary 7" data-price="22790000" data-quantity="1" data-image="images/of6.png">Add to Cart</button>
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
                            <img src="images/of7.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>AORUS GeForce RTX 2070 SUPER 8GB GDDR6</h3>
                        <p class="in-para">The powerful new GeForce RTX™ 2070 takes advantage of the cutting-edge NVIDIA Turing™ architecture to immerse you in incredible realism and performance in the latest games. The future of gaming starts here.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>17,000,000</del> 16,490,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Features: <br />
                            Powered by GeForce® RTX 2070 SUPER™. <br />
                            Integrated with 8GB GDDR6 256-bit memory interface. <br />
                            WINDFORCE Stack 3X 100mm Fan Cooling System. <br />
                            RGB light reinvented. <br />
                            7 Video Outputs. <br />
                            Metal Back Plate. <br />
                            Built for Extreme Overclocking 12+2 Power Phases. <br />
                            4 Years Warranty (Online registration required). <br /> <br />
                            Core Clock: <br />
                            1905 MHz (Reference Card: 1770 MHz).
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="AORUS GeForce RTX 2070 SUPER" data-summary="summary 8" data-price="16490000" data-quantity="1" data-image="images/of7.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of8.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>ASUS ROG Strix PG27UQ 27" IPS 4K 144Hz G-Sync</h3>
                        <p class="in-para">ROG Swift PG27UQ Gaming Monitor – 27” 4K UHD (3840 x 2160), Overclockable 144Hz, G-SYNC HDR, Quantum-dot, IPS, Aura Sync.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>70,000,000</del> 69,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            27-inch 4K UHD (3840 x 2160) HDR gaming monitor with an overclockable 144Hz refresh rate for super-smooth gaming visuals. <br />
                            NVIDIA G-SYNC HDR delivers lifelike contrast and color, with the brightest whites and darkest blacks bringing out details like never before. <br />
                            Quantum-dot IPS display with a wide DCI-P3 color gamut provides realistic colors and smoother gradation. <br />
                            ASUS Aura Sync technology creates immersive ambient lighting and supports synchronization with Aura-enabled components and peripherals. <br />
                            New ROG Light Signal casts the ROG logo to create the perfect atmosphere for your gaming setup.
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="ASUS ROG Strix PG27UQ" data-summary="summary 9" data-price="69990000" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of9.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>LG 34WK95U-W 34" IPS 4K Nano UltraWide WUHD</h3>
                        <p class="in-para">34'' Class 21:9 UltraWide® 5K2K Nano IPS LED Monitor with HDR 600 (34'' Diagonal).</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>34,000,000</del> 32,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            34" UltraWide® Nano IPS Display. <br />
                            5K2K WUHD (5120 x 2160) Resolution. <br />
                            Thunderbolt™ 3. <br />
                            DCI-P3 98%. <br />
                            HDR Support. <br />
                            4-Side Virtually Borderless Design. <br />
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="LG 34WK95U-W" data-summary="summary 10" data-price="32990000" data-quantity="1" data-image="images/of9.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of10.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>SAMSUNG QLED LC49HG90 49" 2K 144Hz</h3>
                        <p class="in-para">Groundbreaking 49-inch super ultra-wide 32:9 curved screen fills your field of view. <br />
                            Quantum dot technology and HDR support provide stunningly realistic color and contrast.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>47,888,000</del> 29,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            The ultra-wide 49-inch screen with its innovative 32:9 aspect ratio means you always get to see game scenes in their entirety, exactly as their developers intended. And the 1800R curved panel immerses you in gameplay and delivers cinematic viewing for movies and video content. <br />
                            With Quantum Dot technology, Samsung’s QLED Gaming Monitor provides an extreme upgrade in your gaming experience. Quantum dot makes today's games appear more lifelike by delivering a billion shades of accurate color.
                            The CHG90 QLED Gaming Monitor features support for High Dynamic Range (HDR), so dark areas are darker and bright areas are brighter. See mind-blowing detail and contrast as bright blue skies share the screen with deep shadows and silhouettes. <br />
                            The CHG90 supports AMD’s new Radeon FreeSync™ 2 technology, which gives gamers a smooth HDR gaming experience with twice the perceivable brightness and color of that offered by the sRGB spectrum. <br />
                            Blending its advanced motion blur reduction technology with its superior VA panel, Samsung has created this curved monitor with a super-fast 1ms MPRT (motion picture response time) that lets you enjoy unprecedented gaming performance without motion blur across the entire screen. <br />
                            The fast 144Hz screen refresh rate ensures you flawlessly smooth action scenes even in games with high frame rates. And you can adjust the refresh rate to 60Hz/120Hz when necessary.
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="SAMSUNG QLED LC49HG90" data-summary="summary 11" data-price="29990000" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of11.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>Acer Predator X34P 34" IPS 2K 120Hz UW QHD</h3>
                        <p class="in-para">CURVATURE: 1900R; Refresh Rate: 100Hz (native) ~ 120Hz (overclock); GtG: 4ms Specifications may vary depending on model and/or region. All models subject to availability.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>28,490,000</del> 27,590,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Let the game wrap itself around your vision as the deep, 1900R* curve bends and extends past your peripheral sight.
                            Go beyond the “standard” (1080p) gaming resolution. <br /> UltraWide QHD, (or 3440 x 1440), creates an entirely different kind of game experience. <br />
                            Smooth, tear-free gaming is the norm with NVIDIA® G-SYNC® and a 120Hz* overclockable1 refresh rate. <br />
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Acer Predator X34P" data-summary="summary 12" data-price="27590000" data-quantity="1" data-image="images/of11.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
    <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
    <div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
    <div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
    <div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of4.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>ROG Strix GeForce RTX 2080 Ti OC 11GB GDDR6</h3>
                        <p class="in-para">NVIDIA’s newest flagship graphics card is a revolution in gaming realism and performance. Its powerful NVIDIA Turing™ GPU architecture, breakthrough technologies, and 11 GB of next-gen, ultra-fast GDDR6 memory make it the world’s ultimate gaming GPU.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>39,500,000</del> 36,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            DirectX 12: Power new visual effects and rendering techniques for more lifelike gaming. <br />
                            4K: Step up to the ultimate 4K gaming experience with GeForce RTX and enjoy today’s biggest games in amazing detail. <br />
                            Axial-tech Fans feature an all-around better design and IP5X dust resistance. <br />
                            2.7-Slot Design expands cooling surface area by over 20% compared to last gen. <br />
                            MaxContact Technology allows 2X more contact with the GPU chip for improved thermal transfer. <br />
                            Auto-Extreme Technology uses automation to enhance reliability. <br />
                            Super Alloy Power II includes premium alloy chokes, solid polymer capacitors, and an array of high-current power stages to fuel Turing™’s cores. <br />
                            ASUS FanConnect II equips 2 hybrid-controlled fan headers for optimal system cooling. <br />
                            GPU Tweak II provides intuitive performance tweaking and thermal controls.
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="ROG Strix GeForce RTX 2080 Ti OC" data-summary="summary 5" data-price="36990000" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of5.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>MSI RTX 2080TI Gaming X Trio 11GB GDDR6</h3>
                        <p class="in-para">NVIDIA’s newest flagship graphics card is a revolution in gaming realism and performance. Its powerful NVIDIA Turing™ GPU architecture, breakthrough technologies, and 11 GB of next-gen, ultra-fast GDDR6 memory make it the world’s ultimate gaming GPU.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>35,990,000</del> 33,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Core/Memory: <br />
                            Boost Clock / Memory Speed: 1755 MHz / 14 Gbps. <br />
                            11GB GDDR6. <br /> <br />
                            TORX FAN 3.0: Supremely silent: <br />
                            Dispersion fan blade: Steeper curved blade accelerating the airflow. <br />
                            Traditional fan blade: Provides steady airflow to massive heat sink below. <br />
                            Double ball bearing: Strong and lasting core for years of smooth gaming. <br /> <br />
                            TRI-FROZR Thermal Design: <br />
                            Using three of the award-winning TORX Fans 3.0 with Double Ball Bearings. <br />
                            Using groundbreaking aerodynamic techniques, the heatsink is optimized for efficient heat dissipation. <br /> <br />
                            RGB Mystic Light: <br />
                            Customize colors and LED effects with exclusive MSI software and synchronize the look & feel with other components. <br /> <br />
                            Afterburner Overclocking Utility: <br />
                            Wireless control through Android/iOS devices. <br />
                            Predator: In-game video recording. <br />
                            Kombustor: DirectX12 benchmark. <br />
                            Supports multi-GPU setups. <br /> <br />
                            Dragon Center: <br />
                            1 click to optimize all you need for smooth gaming.
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="MSI RTX 2080TI Gaming X Trio" data-summary="summary 6" data-price="33990000" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of18.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>ASUS ROG Zenith II Extreme</h3>
                        <p class="in-para">AMD TRX40 E-ATX motherboard sTRX4 for 3rd Gen Ryzen Threadripper, with 16 power stages, PCIe 4.0, Wi-Fi 6 (802.11ax), 10 Gbps Ethernet, USB3.2 Gen2x2, dual USB 3.2 front panel connector, five M.2, SATA and Aura Sync RGB.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>20,000,000</del> 19,370,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Ready for AMD 3rd Gen Ryzen™ Threadripper™ Processors: Maximize connectivity and speed with up to five M.2 drives, USB3.2 Gen2x2 and AMD StoreMI. <br />
                            Robust power delivery: Optimized power solution with 16 Infineon TDA21472 power stages, ProCool II power connectors, microfine alloy chokes and 10K capacitors. <br />
                            Comprehensive thermal design: Active-cooling VRM heatsink, PCIe-zone M.2 aluminum heatsink, backplate, Fan Extension Card II and water-cooling zone. <br />
                            High-performance networking: Onboard Aquantia® 10 Gbps Ethernet, Wi-Fi 6 (802.11ax) with MU-MIMO support, and GameFirst V technology. <br />
                            Unmatched personalization: Color OLED display and ASUS-exclusive Aura Sync RGB lighting, including two additional RGB headers and two addressable headers. <br />
                            Industry-leading ROG audio: SupremeFX S1220 and ESS® SABRE9018Q2C for enthusiast-grade audio performance, featuring Japanese capacitors. <br />
                            DIY-friendly design: Pre-mounted I/O shield, ASUS SafeSlot, BIOS FlashBack™ and FlexKey. <br />
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="19" data-name="ASUS ROG Zenith II Extreme" data-summary="summary 19" data-price="19370000" data-quantity="1" data-image="images/of18.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of19.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>MSI MEG Z390 Godlike LGA1151v2</h3>
                        <p class="in-para">Overwhelming 18 phases VRM and brand-new infinity design, symbolizes the unlimited performance and power. Features Mystic Light Infinity, Dynamic Dashboard, Triple Turbo M.2 with Shield Frozr, XTREME Audio DAC and Dual Front USB 3.1 Gen2 Type-C connectors.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>15,000,000</del> 14,790,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            Supports 9th / 8th Gen Intel® Core™ / Pentium® Gold / Celeron® processors for LGA 1151 socket. <br />
                            Supports DDR4 Memory, up to 4600(OC) MHz. <br />
                            Mystic Light Infinity: 16.8 million colors / 29 effects controlled in one click. Mystic Light Extension supports both RGB and RAINBOW LED strip. <br />
                            Dynamic Dashboard: Built-in dynamic panel that indicates the status of GODLIKE and shows off your own personality. <br />
                            Lightning Fast Game Experience: 1x Turbo U.2, 3x Turbo M.2 with Shield Frozr, Dual Front USB 3.1 Gen2 Type-C. <br />
                            Xtreme Audio DAC: Isolated audio with ESS DAC, 2x audio processors & Nahimic to deliver the breathtaking sound quality with 384kHz/32-bit. <br />
                            Killer xTend: Combine a built-in-switch with wireless extender. Killer fueled LAN & WIFI extender with ultimate traffic prioritization. <br />
                            Pre-installed I/O Shielding: Better EMI protection and more convenience for installation. <br />
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="20" data-name="MSI MEG Z390 Godlike" data-summary="summary 20" data-price="14790000" data-quantity="1" data-image="images/of19.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of8.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>ASUS ROG Strix PG27UQ 27" IPS 4K 144Hz G-Sync</h3>
                        <p class="in-para">ROG Swift PG27UQ Gaming Monitor – 27” 4K UHD (3840 x 2160), Overclockable 144Hz, G-SYNC HDR, Quantum-dot, IPS, Aura Sync.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>70,000,000</del> 69,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            27-inch 4K UHD (3840 x 2160) HDR gaming monitor with an overclockable 144Hz refresh rate for super-smooth gaming visuals. <br />
                            NVIDIA G-SYNC HDR delivers lifelike contrast and color, with the brightest whites and darkest blacks bringing out details like never before. <br />
                            Quantum-dot IPS display with a wide DCI-P3 color gamut provides realistic colors and smoother gradation. <br />
                            ASUS Aura Sync technology creates immersive ambient lighting and supports synchronization with Aura-enabled components and peripherals. <br />
                            New ROG Light Signal casts the ROG logo to create the perfect atmosphere for your gaming setup.
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="ASUS ROG Strix PG27UQ" data-summary="summary 9" data-price="69990000" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="col-md-5 span-2">
                        <div class="item">
                            <img src="images/of10.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 span-1 ">
                        <h3>SAMSUNG QLED LC49HG90 49" 2K 144Hz</h3>
                        <p class="in-para">Groundbreaking 49-inch super ultra-wide 32:9 curved screen fills your field of view. <br />
                            Quantum dot technology and HDR support provide stunningly realistic color and contrast.</p>
                        <div class="price_single">
                            <span class="reducedfrom "><del>47,888,000</del> 29,990,000 VND</span>

                            <div class="clearfix"></div>
                        </div>
                        <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc">
                            The ultra-wide 49-inch screen with its innovative 32:9 aspect ratio means you always get to see game scenes in their entirety, exactly as their developers intended. And the 1800R curved panel immerses you in gameplay and delivers cinematic viewing for movies and video content. <br />
                            With Quantum Dot technology, Samsung’s QLED Gaming Monitor provides an extreme upgrade in your gaming experience. Quantum dot makes today's games appear more lifelike by delivering a billion shades of accurate color.
                            The CHG90 QLED Gaming Monitor features support for High Dynamic Range (HDR), so dark areas are darker and bright areas are brighter. See mind-blowing detail and contrast as bright blue skies share the screen with deep shadows and silhouettes. <br />
                            The CHG90 supports AMD’s new Radeon FreeSync™ 2 technology, which gives gamers a smooth HDR gaming experience with twice the perceivable brightness and color of that offered by the sRGB spectrum. <br />
                            Blending its advanced motion blur reduction technology with its superior VA panel, Samsung has created this curved monitor with a super-fast 1ms MPRT (motion picture response time) that lets you enjoy unprecedented gaming performance without motion blur across the entire screen. <br />
                            The fast 144Hz screen refresh rate ensures you flawlessly smooth action scenes even in games with high frame rates. And you can adjust the refresh rate to 60Hz/120Hz when necessary.
                        </p>
                        <div class="add-to">
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="SAMSUNG QLED LC49HG90" data-summary="summary 11" data-price="29990000" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <h3>SONY Playstation 4 Pro 1TB MASTER</h3>
                        <p class="in-para">HEIGHTEN YOUR EXPERIENCES. ENRICH YOUR ADVENTURES.<br />
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
                            <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="SONY Playstation 4 Pro 1TB" data-summary="summary 14" data-price="11290000" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
</body>

</html>