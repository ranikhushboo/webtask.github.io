<?php include('conn.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<form method="post" id="form" class="form" action="adminregister.php">
	<?php echo display_error(); ?>


	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="adminlogin.php">Sign in</a>
	</p>
</form>
</body>
</html>
<script>
  $(document).ready(function () {
    $('#form').validate({
      rules: {
        username: {
          required: true
        },
         
        password: {
          required: true,
          minlength: 8
        },
        email: {
          required: true,
		  minlength:4
        }
      },
      messages: {
        username: 'Please enter Name.',
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        },
        email: {
		  required: 'The username field is mandatory!',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>