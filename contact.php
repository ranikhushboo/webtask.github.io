<?php
require("conn.php");
        
		if(isset($_REQUEST["submit"]))
        {
          $name = $_REQUEST["name"];
          $email = $_REQUEST["email"];
		  $enquiry = $_REQUEST["subject"];
		  $discussion = $_REQUEST["discussion"];
	      

		  
            $qry = "insert into contact (name,email,enquiry,discussion) values ('$name','$email','$enquiry','$discussion')" ;
	 
	         mysqli_query($con,$qry)  or die ("something went wrong");
			
	 
	        echo"<script> alert('Message Send')</script>";
		
	        
		}
    

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

                                               
                                                    <li><a href="btech.php"> B.Tech</a>
													
													</li>
                                                    <li><a href="bcabooks.php">BCA</a></li>
                                                    <li><a href="#"> BBA</a></li>
                                                    <li><a href="#"> MBA</a></li>
                                                </ul>
                                    
                                    <li><a href="./service.php">Services</a></li>
                                    
                                    <li><a href="">Blog</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>

                                <!-- Cart Icon -->
                                <!--<div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div>-->

                                <!-- Book Icon -->
                                <!--<div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="" class="btn akame-btn">Book Now</a>
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


    <!-- Contact Information Area Start -->
    <section class="contact-information-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Information -->
                <div class="offset-3 col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_phone"></i>
                        <h4>Phone</h4>
                        <p>7307495208</p>
                    </div>
                </div>

               
                <!-- Single Contact Information -->
                <div class=" col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_mail"></i>
                        <h4>Email</h4>
                        <p>rkhusboo08@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Information Area End -->

    <!-- Contact Area Start -->
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Leave message</h2>
                        <p>We will try our best to solve your problem and answer your questions.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <form class= action="#" method="post" class="akame-contact-form border-0 p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control mb-30" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" class="form-control mb-30" placeholder="Email">
                            </div>
						
    
	
							<div class="col-12">
							<select name="subject" id="select" class="form-control required">
								<span class="req">
								<option>General Enquiry</option>
								<option>Selling Your Books</option>
								<option> For Book Purchase</option>
								<option> Any Book Details</option>
								</span>
								
								</select>
							</div>

                            <div class="col-12">
                                <textarea type="message" name="discussion" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active" name="submit">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

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

    