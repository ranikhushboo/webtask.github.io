<?php
require("conn.php");
$qry="select * from addblog ";
$res= mysqli_query($db,$qry) or die("SOMETHING WENT WRONG");

?>

<html>
<head>
<title>View Blogs</title>
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
	   <center id="viewblog"><h1> View blogs</h1></center> 
	  <table class="table table hover table-bordered">
	  <tr class="success">
	  <th>Id</th>
	  <th>Blog title</th>
	  <th>Photo</th>
	  </tr>
	  <?php
	  while($data= mysqli_fetch_assoc($res))
{
	  ?>
	  <tr class="info">
	  <td><?php echo $data['id']; ?></td>
	  <td><?php echo $data['blog_title']; ?></td>
	  <td><?php echo $data['upload_pic']; ?></td>
	  <!--<td><?php //echo $data['content']; ?></td>-->
	  </tr>
	  <?php
}
	  ?>
	  </table>
	  
	  </div>




</body>
</html>