
<?php
include('header.php');
?>
<body>

 <div class="container">
	<div class="row">
	  <div class="col-md-6">
		  <form action="https://www.paypal.com/us/cgi-bin/webscr" method="post">
			   <span>Just click on the button for online Payment </span><br /> <div>
				<br />
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="dhiman.manoj33@gmail.com">
				<input type="hidden" name="item_name" value="Registration Fees">
				<input type="hidden" name="item_number" value="Registration Fees">
				<input type="hidden" name="amount" value="100">
				<input type="hidden" name="currency_code" value="INR">
				<input class="btn btn-success" type="submit"class="btn pymntbtn"value="Pay Online "/>
		</form>
	</div>
	
	</div>
</div>
</body>
</html>