<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  
  <style>
  #headdesign
{margin-left:450px; color:#6600FF;}
  </style>
<script>
function validation()
{
	    user=document.getElementById('user').value;
		email=document.getElementById('emails').value;
		contact=document.getElementById('mobilenumber').value;
		course=document.getElementById('select').value;
		cpwd=document.getElementById('conpass').value;

	    if(user=="")
	    {
		document.getElementById('username').innerHTML="**Please fill the username field";
	     return false;
		}
		
		if(!isNaN(user)){
		document.getElementById('username').innerHTML="**Only Characters";
	     return false;
		}	

		
		
		
		if(email=="")
	    {
		document.getElementById('emailid').innerHTML="**Please fill the Email Id";
	     return false;
		}
		
		
		p=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        emailval=email.value;
        if(!p.test(emailval))
	    {
	    document.getElementById('emailid').innerHTML="**Wrong Email Pattern";
	    }

	    if(contact=="")
	    {
		document.getElementById('mobile no').innerHTML="**Please fill Contact Number";
	     return false;
		}
		
		

		
		
		if(course=="")
	    {
		document.getElementById('passwords').innerHTML="**Please select a course";
	     return false;
		}
		
		    
			

			 
			 
		
		if(cpwd=="")
	    {
		document.getElementById('confirmpass').innerHTML="**Please Write books name";
	     return false;
		}
		
}
</script>
  
  
  
  
  
  
  
</head>
<body>

       
	
	
<h1 id="headdesign">Get Books On Rent</h1>
<div class="container" id="design">

<div class="col-lg-10 m-auto d-block">
<form action="#" onclick="return-validation()" class="bg-light">



<div class="form-group">
<label>Your Name:</label>
<input type="text" name="user" class="form-control" id="user">
<span id="username" class="text-danger font-weight-bold"></span>
</div>



     <div class="form-group">
     <label>Email:</label>
     <input type="text" name="email" class="form-control" id="emails">
     <span id="emailid" class="text-danger font-weight-bold"></span>
     </div>

<div class="form-group">
<label>Mobile No:</label>
<input type="text" name="mobile" class="form-control" id="mobilenumber">
<span id="mobile no" class="text-danger font-weight-bold"></span>
</div>



                         <div class="form-group">
                       
					   <label>Course</label>
                        
                      <select name="subject" id="select" class="form-control required">
	                  <span class="req">
		              <option>B.Tech</option>
		              <option>BCA</option>
		              <option> BBA</option>
		              <option> MBA</option>
		              </span>
					  </select>
					  </div>

<div class="form-group">
<label>Books Name</label>
<input type="textarea" name="bname" class="form-control" id="conpass">
<span id="confirmpass" class="text-danger font-weight-bold"></span>
</div>
         
		 
		<div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" id="price">
        <span id="sprice" class="text-danger font-weight-bold"></span>
        </div> 
		 

<input type="submit" name="Register" value="submit" class="btn btn-success">
</form>
</div>

      
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
                            <p>Phone:7814162323</p>
                            <p>E-mail:simaranku098@gmail.com</p>
                            
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
  
</body>
</html>