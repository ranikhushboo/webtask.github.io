<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body>
<?php
    require('conn.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `registration` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
		
?>    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
     <form id="form"  class="form" method="post" action="">
	    <!--<form name="form" method="POST" class="" onclick="return validateform()" action="">-->
        <h1 class="login-title">Registration</h1>
		<p id="usernamemsg" style="color:red"></p>
        <input type="text" class="login-input" name="username" placeholder="Username" id="username"/>
		<p id="emailmsg" style="color:red"></p>
        <input type="text" class="login-input" name="email" placeholder="Email Adress" id="email">
		<p id="passwordmsg" style="color:red"></p>
        <input type="password" class="login-input" name="password" placeholder="Password" id="password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>
<style>
  .error {
    color: red;
  }
</style>
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
<!--<script>
function validateform() {
            let username = document.forms["form"]["username"].value;
			let password= document.forms["form"]["password"].value;
			let email = document.forms["form"]["email"].value;
            if (username == "") {
                document.getElementById("namemsg").innerHTML = "Please enter username";
                
						
            }
            if (password == "") {
                document.getElementById("passwordmsg").innerHTML = "Please enter password";
                
            }
            
            if (email== "") {
                document.getElementById("emailmsg").innerHTML = "Please enter email";
               
            }
			p=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			emailval=email.value;
			if(!p.test(emailval))
			{
			document.getElementById('emailid').innerHTML="**Wrong Email Pattern";
			}
			return false;
			
        }
</script>-->