<?php
require("conn.php");
        
		if(isset($_REQUEST["add"]))
        {
          $name = $_REQUEST["name"];
          $email = $_REQUEST["email"];
          $subject = $_REQUEST["subject"];
          $discussion = $_REQUEST["discussion"];
		 
            $qry = "INSERT INTO contact (name, email,subject,discussion)
            VALUES ('$name', '$email', '$subject','$discussion')";
		  
            //$qry = "insert into bookadd (books,course, author, rent, buy) values ('$bookname','$course', '$authorname', '$rentprice', '$buyprice')" ;
			 mysqli_query($db,$qry)  or die ("something went wrong");
	       echo"<script> alert('added Successfull')</script>";
		
	        
		}
    

?>



<html>
<head>
<title>Add Message</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<style>
#design
{border:#FF9966 solid 5px; margin-top:70px; height:600px; width:800px; background:#FFCC66;}

#headdesign
{margin-left:280px; color:#6600FF;font-style:italic; font-weight:bold;}
</style> 
</head>
<body>
<div class="container" id="design">
<h2 id="headdesign">Add Messages</h2>
<div class="col-lg-10 m-auto d-block">

<form action="viewusermessage.php" onclick="return-validation()" class="bg-light">


<div class="form-group">
<label>Name:</label>
<input type="text" name="name" class="form-control required" id="name">
</div>


	<div class="form-group">
		<label>Email:</label>
		<input type="text" name="email" class="form-control required" id="email">
	</div>



	 <div class="form-group">
		 <label>Subject:</label>
		 <input type="text" name="subject" class="form-control required" id="subject">
	 </div>

    <div class="form-group">
       <label>Discussion:</label>
       <input type="text" name="discussion" class="form-control required" id="discussion">
   </div>

<center><input type="submit" name="add" value="Add Message" class="btn btn-success"></center>

</form>
</div>
</body>
</html>