<html>
<head>
<title>Admin Panel welcome</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>



#header
{color:gray; margin-left:500px;}

.welcome
{color:orange; margin-left:430px;}

#box
{height:600px; width:90%; background:#FFFAFA; margin-top:50px; margin-bottom:100px; border:solid 3px orange; background-image:url(images/booksg9.jpg);background-repeat:no-repeat;background-position:right;}

.btn1
{font-weight:bold;;background:orange; width:170px; margin-top:70px;margin-left:70px;}




</style>
</head>
<body>
         <nav class="navbar navbar-inverse" id="bar">
		    <h3 id="header">Rental Books Store</h3>
         </nav>
		 
		
        <h1 class="welcome">Welcome To Admin Panel &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <a href="adminregister.php"><button class="btn btn-danger"> User Sign Up</button></a> <a href="adminlogin.php"><button class="btn btn-danger">Sign Out</button></a></h1>
		
		
		
		<div class="container" id="box">
		<h2 class="welcome"> Add Fields</h2>
		<a href="addbooks.php"> <button class="btn1">Add Books</a></button> &nbsp &nbsp &nbsp <a href="viewbooks.php"> <button class="btn1">View Books</a></button> </br></br>
		<a href="admin_book.php"> <button class="btn1">Admin_Book</a></button></br></br>
         <a href="addblogs.php"><button class="btn1">Add Blogs</a></button> &nbsp &nbsp &nbsp <a href="viewblogs.php"><button class="btn1">View Blogs</button> </br></br>
         
        <a href="addusermessage.php"><button class="btn1">Add User Message</a></button>&nbsp &nbsp &nbsp <a href="viewusermessage.php"><button class="btn1">View User Message</button> </br></br>
        
		 
		</div>
		
     
</body>
</html>