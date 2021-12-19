<?php
require("conn.php");
if(isset($_POST['submit'])) 
{
	$name = $_POST['user'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$course = $_POST['subject'];
	$duration = $_POST['duration'];
	$bookname = $_POST['bookname'];
	$price = $_POST['rentprice'];
	$total_price = $duration*$price;
	
	//$qry = "INSERT INTO confirmorder (user, email, mobile,subject,duration,bookname,rentprice,total_price)
            //VALUES ('$user', '$email', '$mobile','$subject','$duration','$bookname','$rentprice','$total_price')";
		  
            //$qry = "insert into bookadd (books,course, author, rent, buy) values ('$bookname','$course', '$authorname', '$rentprice', '$buyprice')" ;
			 //mysqli_query($db,$qry)  or die ("something went wrong");
	       //echo"<script> alert('Successfull')</script>";
}
        
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Confirm Your Order</title>

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
                                    
                                    <li><a href="">Blog</a></li>
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
                        <h2>Confirm Your Order</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">On Rent</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->


<div class="container">

<div class="col-lg-10 m-auto d-block">
<form action="onrent.php" method="get" onclick="return-validation()" class="bg-light">



<div class="form-group">
<label>Your Name:</label>
<input type="text" name="user" class="form-control" id="user" value="<?php echo $name; ?>">
<span id="username" class="text-danger font-weight-bold"></span>
</div>



     <div class="form-group">
     <label>Email:</label>
     <input type="text" name="email" class="form-control" id="emails" value="<?php echo $email; ?>">
     <span id="emailid" class="text-danger font-weight-bold"></span>
     </div>

<div class="form-group">
<label>Mobile No:</label>
<input type="text" name="mobile" class="form-control" id="mobilenumber" value="<?php echo $mobile; ?>">
<span id="mobile no" class="text-danger font-weight-bold"></span>
</div>



                         <div class="form-group">
                       
					   <label>Course</label>
                        
                      <select name="subject" id="select" class="form-control required" value="<?php echo $course; ?>">
	                  <span class="req">
		              <option>B.Tech</option>
		              <option>BCA</option>
		              <option> BBA</option>
		              <option> MBA</option>
		              </span>
					  </select>
					  </div>
					  
					  
	  <div class="form-group">
                       
					   <label>Duration</label>
                        
                      <select name="duration" id="selectdur" value="<?php echo $duration; ?>" readonly  class="form-control required">
	                  <span class="req">
		              <option>1month</option>
		              <option>2 months</option>
		              <option>3 months</option>
		              <option>4 months</option>
		              </span>
					  </select>
					  </div>				  
					  
					  
					  
					  
					  
					  
					  
					  

<div class="form-group">
<label>Books Name</label>
<input type="textarea" name="bookname"  class="form-control" id="conpass"  value="<?php echo $bookname; ?>">
<span id="confirmpass" class="text-danger font-weight-bold"></span>
</div>
         
		 
		<div class="form-group">
        <label>Price</label>
		<?php echo $price; ?>
        <input type="text" name="price" class="form-control" id="price" value="<?php echo $total_price; ?>">
        <span id="sprice" class="text-danger font-weight-bold"></span>
        </div> 
		 <input type="submit" name="submit" value="Submit" class="btn btn-success">
<!--<center><input type="submit" name="submit" value="Buy Now" class="btn btn-success"></center>-->
</form>
</div>


       <!-- Testimonial Area Start -->
    <section class="testimonial-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="testimonial-slides owl-carousel">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>An investment in knowledge pays the best interest!</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>-----</h5>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>Develop a passion for learning!</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>-----</h5>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>Education is the key to unlock the golden door of freedom!</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>-----</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

   

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