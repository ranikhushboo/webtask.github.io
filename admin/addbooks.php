<?php
require("conn.php");
        
		if(isset($_REQUEST["add"]))
        {
          $bookname = $_REQUEST["books"];
          $course = $_REQUEST["course"];
          $authorname = $_REQUEST["author"];
          $rentprice = $_REQUEST["rent"];
          $buyprice= $_REQUEST["buy"];
		 
            $qry = "INSERT INTO bookadd (bookname, course, authorname,rentprice,buyprice)
            VALUES ('$bookname', '$course', '$authorname','$rentprice','$buyprice')";
		  
            //$qry = "insert into bookadd (books,course, author, rent, buy) values ('$bookname','$course', '$authorname', '$rentprice', '$buyprice')" ;
			 mysqli_query($db,$qry)  or die ("something went wrong");
	       echo"<script> alert('Bookadded Successfull')</script>";
		
	        
		}
    

?>



<html>
<head>
<title>Add Books</title>
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
<h2 id="headdesign">Add Books</h2>
<div class="col-lg-10 m-auto d-block">

<form action="#" onclick="return-validation()" class="bg-light">


<div class="form-group">
<label>Book Name:</label>
<input type="text" name="books" class="form-control required" id="bookname">
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
		<input type="text" name="author" class="form-control required" id="authorname">
	</div>



	 <div class="form-group">
		 <label>Price For Rent:</label>
		 <input type="text" name="rent" class="form-control required" id="rent">
	 </div>

    <div class="form-group">
       <label>Price For Buy:</label>
       <input type="text" name="buy" class="form-control required" id="buy">
   </div>

<center><input type="submit" name="add" value="Add Book" class="btn btn-success"></center>

</form>
</div>
</body>
</html>