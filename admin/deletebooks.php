<?php
require("conn.php");
        
		if(isset($_REQUEST["delete"]))
        {
          $bookname = $_REQUEST["books"];
		  $qry= "DELETE FROM bookadd WHERE bookname= '$bookname'";
		 mysqli_query($db,$qry)  or die ("something went wrong");
			

	 
	     echo"<script> alert('Successfully Deleted')</script>";
		
	        
		}
   
?>



<html>
<head>
<title>Delete Books</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<style>
#design
{border:#FF9966 solid 5px; margin-top:70px; height:200px; width:800px; background:#FFCC66;}

#headdesign
{margin-left:280px; color:#6600FF;}
</style> 
</head>
<body>
<div class="container" id="design">
<h2 id="headdesign">Delete Books</h2>
<div class="col-lg-10 m-auto d-block">

<form action="viewbooks.php" method="get">


<div class="form-group">
<label>Book Name:</label>
<input type="text" name="books" class="form-control" id="bookname">
</div>





<center><input type="submit" name="delete" value="Delete" class="btn btn-success"></center>

</form>
</div>
</body>
</html>