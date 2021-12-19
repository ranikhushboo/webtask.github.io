
<?php
require("conn.php");
 $qry="select * from addbook where course='B.Tech' ";
$res= mysqli_query($con,$qry) or die("SOMETHING WENT WRONG");

?>

<?php  include('header.php');?>

	  <div class="container">
	   <center><h2> BTECH Books</h2></center> 
	  <table class="table table hover table-bordered" >
	  <thead>
	  <tr class="success">
	  <th>S.no</th>
	  <th>Book Name</th>
	  <th>Course</th>
	  <th>Author</th>
	  <th>Rent Price</th>
	  <th>Buy Price</th>
	  <th>On Rent</th>
	  <th>New Book</th>
	  <th>Old Book</th>
	  </tr>
	  </thead>
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
	  <td><a href="onrent.php?book_id=<?php echo $data['id']; ?>">On Rent</a></td>
	  <td><a href="newbooks.php">New Books</a></td>
	  <td><a href="oldbooks.php">Old Books</a></td>
	  </tr>
	  <?php
}
	  ?>
	  </table>
	  
	  </div>




</body>
</html>