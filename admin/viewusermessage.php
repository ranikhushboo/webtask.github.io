<?php
require("conn.php");
$qry="select * from contact ";
$res= mysqli_query($db,$qry) or die("SOMETHING WENT WRONG");

?>

<html>
<head>
<title>View User Message</title>
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
	   <center id="viewbook"><h1> View User Message</h1></center> 
	  <table class="table table hover table-bordered">
	  <tr class="success">
	  <th>Id</th>
	  <th>Name</th>
	  <th>Email</th>
	  <th>General Enquiry</th>
	  <th>Discussion</th>
	  </tr>
	  <?php
	  while($data= mysqli_fetch_assoc($res))
{
	  ?>
	  <tr class="info">
	  <td><?php echo $data['id']; ?></td>
	  <td><?php echo $data['name']; ?></td>
	  <td><?php echo $data['email']; ?></td>
	  <td><?php echo $data['enquiry']; ?></td>
	  <td><?php echo $data['discussion']; ?></td>
	  </tr>
	  <?php
}
	  ?>
	  </table>
	  
	  </div>




</body>
</html>