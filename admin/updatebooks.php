<?php
require("conn.php");
        
		if(isset($_REQUEST["update"]))
        {
          $bookname = $_REQUEST["books"];
          $course = $_REQUEST["course"];
          $authorname = $_REQUEST["author"];
          $rentprice = $_REQUEST["rent"];
          $buyprice= $_REQUEST["buy"];
		  $duration=$_REQUEST["duration"];
	      

		   $qry= "update bookadd set course='$selcourse', authorname='$authorname', rentprice='$rent', buyprice='$buy' ,duration='$duration' where bookname='$bookname'";
	         mysqli_query($db,$qry)  or die ("something went wrong");
			

	 
	        echo"<script> alert('Successfully Updated')</script>";
		
	        
		}
    

?>



<html>
<head>
<title>Update Books</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<style>
#design
{border:#FF9966 solid 5px; margin-top:70px; height:650px; width:800px; background:#FFCC66;}

#headdesign
{margin-left:280px; color:#6600FF;}
</style> 
</head>
<body>
<div class="container" id="design">
<h2 id="headdesign">Update Books</h2>
<div class="col-lg-10 m-auto d-block">

<form action="viewbooks.php" onclick="return-validation()" class="bg-light">


<div class="form-group">
<label>Book Name:</label>
<input type="text" name="books" class="form-control" id="bookname">
</div>

<div class="form-group">
<label>Course:</label>
<select name="course" id="selcourse" class="form-control required">
			  <span class="req">
			  <option>B.Tech</option>
			  <option>BCA</option>
			  <option>BBA</option>
			  <option>MBA</option>
			  </span>
			  </select>
</div>

<div class="form-group">
<label>Author Name:</label>
<input type="text" name="author" class="form-control" id="authorname">
</div>
 <div class="form-group">
 <label>Price For Rent:</label>
 <input type="text" name="rent" class="form-control" id="rent">
 </div>

<div class="form-group">
<label>Price For Buy:</label>
<input type="text" name="buy" class="form-control" id="buy">
</div>
<div class="form-group">
<label>Duration:</label>
<select name="duration" id="selectdur" class="form-control required">
	    <span class="req">
		<option>1 months</option>
		<option>2 months</option>
		<option>3 months</option>
		<option>4 months</option>
		</span>
		
	    </select>
</div>
<center><input type="submit" name="update" value="Update" class="btn btn-success"></center>

</form>
</div>
</body>
</html>