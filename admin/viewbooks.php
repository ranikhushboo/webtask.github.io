<?php
require("conn.php");
$qry="select * from bookadd ";
$res= mysqli_query($db,$qry) or die("SOMETHING WENT WRONG");

?>

<html>
<head>
<title>View Books</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<style>
#viewbook
{font-style:italic; font-weight:bold;color:orange;}
</style> 
  
  
</head>
<body>
      
	  <div class="container">
	   <center id="viewbook"><h1> View Books</h1></center> 
	  <table class="table table hover table-bordered">
	  <tr class="success">
	  <th>S.no</th>
	  <th>Course</th>
	  <th>Book Name</th>
	  <th>Author</th>
	  <th>Rent Price</th>
	  <th>Buy Price</th>
      <th>Edit</th>
	  <th>Delete</th>
	  
	  </tr>
	  <?php
	  while($data= mysqli_fetch_assoc($res))
{
	  ?>
	  <tr class="info">
	  <td><?php echo $data['id']; ?></td>
	  <td><?php echo $data['bookname']; ?></td>
	  <td><?php echo $data['course']; ?></td>
	  <td><?php echo $data['authorname']; ?></td>
	  <td><?php echo $data['rentprice']; ?></td>
	  <td><?php echo $data['buyprice']; ?></td>
	  
	  
	  <td><a href="updatebooks.php"><button class="btn btn-link glyphicon glyphicon-pencil "></button></a></td>
	  
	  <td><a href="deletebooks.php"><button class="btn btn-link glyphicon glyphicon-trash"></button></a></td>
	  </tr>
	  <?php
}
	  ?>
	  </table>
	  
	  </div>




</body>
</html>