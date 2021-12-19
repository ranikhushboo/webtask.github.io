

Skip to content
Using Gmail with screen readers
Conversations
0.47 GB (3%) of 15 GB used
Manage
Terms · Privacy · Program Policies
Last account activity: 0 minutes ago
Details

<?php

session_start();

if(!isset($_SESSION['user_name'])) {
	
	header("location: login.php");
}
else {

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert New Post</title>
</head>

<body>
<form method="post" action="myinsert.php" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
    	<tr>
        	<td align="center" colspan="5" bgcolor="#99FFCC">
            	<h1>Insert Here</h1>
            </td>
        </tr>
        <tr>
        	<td align="right">Product Name:</td>
            <td><input type="text" name="title" size="40"/></td>
        </tr>
         
         <tr>
        	<td align="right">Product Image:</td>
            <td><input type="file" name="image" /></td>
        </tr>
        <tr>
        	<td align="right">Product Price :</td>
            <td><input type="text" name="prize" /></td>
        </tr>
         <tr>
        	<td align="right">Offer :</td>
            <td><input type="text" name="offer" /></td>
        </tr>
        <tr>
        	<td align="right">Type :</td>
            <td>
            	<select name="type">
                	<option value="cake">Cake</option>
                	<option value="donut">Donut</option>
                	<option  value="cookie">Cookie</option>
                </select>
            </td>
        </tr>
         <tr>
            <td align="center" colspan="5"><input type="submit" name="submit" value="Publish Now" /></td>
        </tr>
    </table>
</form>

</body>
</html>



<?php } ?>

<?php

include("bakerydb.php");

if(isset($_POST['submit'])) 
{
	$name = $_POST['title'];
	$prize=$_POST['prize'];
	$offer=$_POST['offer'];
	$type = $_POST['type'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	
	if($name == '' or $prize == '' ) 
	{
		echo "<script>alert('Any field is empty')</script>";	
		exit();
	}
	
	if($image_type == "image/jpeg" or $image_type == "image/png" or $image_type == "image/gif") 
	{
		
		if($image_size <= 1110000) 
		{
			move_uploaded_file($image_tmp,"../images/$image_name");
		}
		else 
		{
			echo "<script>alert('Image is larger, only 111kb size is allowed')</script>";
		}
	}
	
	else 
	{
		echo "<script>alert('Image type is invalid')</script>";
	}	

	$query = "insert into products (product_name,product_prize,product_image,offer, type) values ('$name','$prize','$image_name','$offer', '$type') ";
	
	if(mysql_query($query)) 
	{
		echo "<script>window.open('index.php?published=Post has been published','_self')</script>";
	}
}
?>
