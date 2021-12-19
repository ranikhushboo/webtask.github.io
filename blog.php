<?php
require("conn.php");
$qry="select * from addblog ";
$res= mysqli_query($con,$qry) or die("SOMETHING WENT WRONG");

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Rental-Book Store</title>

    
    

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
	
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Welcome to Book Store!</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Always Available<span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Contact us:7307495208</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html">Rental Books Store</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.php">Home</a></li>
									 <li><a href="./about.php">About Us</a></li>
                                    <li><a href="#">Course</a>
                                        <ul class="dropdown">

                                               
                                                    <li><a href="#"> B.Tech</a>
													
													</li>
                                                    <li><a href="#">BCA</a></li>
                                                    <li><a href="#"> BBA</a></li>
                                                    <li><a href="#"> MBA</a></li>
                                                </ul>
                                    
                                    <li><a href="./service.php">Services</a></li>
                                   
                                    <li><a href="./blog.php">Blog</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>

                                <!-- Cart Icon -->
                                <!--<div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div>-->

                                <!-- Book Icon -->
                                <!--<div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="#" class="btn akame-btn">Book Now</a>
                                </div>-->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Our Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
<style>
#gridgrid
{height:200px;width:200px;background:#AEEEEE; margin:25px;}


</style>
    <!-- News Area Start -->
    <section class="akame-news-area section-padding-0-80">

             <div class="container">
	  
	           <div class="row">
			   
			<?php
	          while($data= mysqli_fetch_assoc($res))
              {
	        ?>
		     <div id="gridgrid" class="col-md-6">
			  <?php echo $data['file_name']; ?>
			  <!--<?php echo $data['upload_pic']; ?>-->
			  <!--<?php echo $data['content'];?>-->
		     </div>
			   	  <?php
              }
	        ?>
		       </div>
	  
	  
	  </div>
                

            
        
    </section>
    

        <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><h3>Rental Books Store</h3></a>

                        <p class="mb-30">We would love to serve you and let you enjoy your experience.</p>

                        <!-- Copywrite Text -->
                        
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Opening times</h4>

                        <!-- Open Times -->
                        <div class="open-time">
                            <p>Monday: Friday: 10.00 - 23.00</p>
                            <p>Saturday: 10.00 - 19.00</p>
                        </div>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Phone:7307495208</p>
                            <p>E-mail:rkhusboo08@gmail.com</p>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>