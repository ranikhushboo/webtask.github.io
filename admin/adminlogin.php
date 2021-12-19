<?php include('conn.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
    <form method="post" id="form" class="form" action="adminlogin.php">
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="adminregister.php">Sign up</a>
		</p>
	</form>
</body>
</html>
<!--<script>
  $(document).ready(function () {
    $('#form').validate({
      rules: {
        username: {
          required: true
        },
         
        password: {
          required: true,
          minlength: 8
        }
      },
      messages: {
        username: 'Please enter Name.',
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>-->