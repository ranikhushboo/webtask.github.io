<?php
require("conn.php");
if(isset($_POST['addblogs']))
{ 
$blog = $_POST["title"];
          $pic = $_FILES["image"];
		  
		  $picname = $pic["name"];
	      $pictmploc = $pic["tmp_name"];
	      $picsize = $pic["size"];
$filepath = "image_upload/" . $_FILES["image"]["name"];
$qry = "insert into addblog (blog_title,upload_pic) values ('$blog','$picname')" ;
	 
	         mysqli_query($db,$qry)  or die ("something went wrong");

if(move_uploaded_file($_FILES["image"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 
?>
<?php
/*require("conn.php");
        
		if(isset($_REQUEST["addblogs"]))
        {

          $blog = $_REQUEST["title"];
          $pic = $_FILES["image"];
		  
		  $picname = $pic["name"];
	      $pictmploc = $pic["tmp_name"];
	      $picsize = $pic["size"];
	
	      $picnewloc = "../image_upload/$picname";
	
	      
	     
		    move_uploaded_file($pictmploc,$picnewloc);

		 
               $content = $_REQUEST["blogs"];
          
	      

		  
            $qry = "insert into addblog (blog_title,upload_pic,content) values ('$blog','$picname','$content')" ;
	 
	         mysqli_query($db,$qry)  or die ("something went wrong");
			

	 
	        echo"<script> alert('Blog Posted ')</script>";
		
	        
		}
    */
?>
<html>
<head>
<title>Add Blogs</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<style>
#design
{border:#FF9966 solid 5px; margin-top:70px; height:350px; width:800px; background:#FFCC66;}

#headdesign
{margin-left:280px; color:#6600FF;}
</style> 
</head>
<body>
<div class="container" id="design">
<h2 id="headdesign">Add Blogs</h2>
<div class="col-lg-10 m-auto d-block">
<form action="" method="POST" enctype="multipart/form-data">


     

<div class="form-group">
<label>Blog Title:</label>
<input type="textarea" name="title" class="form-control" id="blogtitle">
</div>


<div class="form-group">
     <label>Upload Pic:</label>
      <input type="file" class="form-control" name="image"/>
</div>	 



<div class="form-group">
<label>Content:</label>
<textarea type ="message" name="blogs" class="form-control" id="blogscontent"></textarea>
</div>


<center><input type="submit" name="addblogs" value="Post Blogs" class="btn btn-success"></center>

</form>
</div>
</body>
</html>