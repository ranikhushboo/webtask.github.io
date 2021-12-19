<?php
require("conn.php");
$qry="select * from addblog ";
$res= mysqli_query($con,$qry) or die("SOMETHING WENT WRONG");

?>


<html>
<head>
<title>Blogs Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  

<style>
#gridgrid
{height:200px;width:200px;background:#AEEEEE; margin:25px;}


</style>
</head>
<body>
      <div class="container">
	  
	           <div class="row">
			   
			<?php
	          while($data= mysqli_fetch_assoc($res))
              {
	        ?>
		     <div id="gridgrid" class="col-md-6">
			  <?php echo $data['blog_title']; ?>
			  <?php echo $data['upload_pic']; ?>
			  <?php //echo $data['content'];?>
		     </div>
			   	  <?php
              }
	        ?>
		       </div>
	  
	  
	  </div>


</body>
</html>