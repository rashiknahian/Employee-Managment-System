<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
	
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT admin FROM users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO users(username,email,password) VALUES('$uname','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<script type='text/javascript'>successfully registered !</script>";
		}else {
			$msg = "<script type='text/javascript'> error while registering !</script>";
		}
		
	} else {
		
		
		$msg = "<script type='text/javascript'>sorry email already taken !</script>";
			
	}
	
	$DBcon->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Employee Management</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="signin-form">
        <div class="form-style" style="margin-top:5%;">
            <form class="form-signin" method="post" id="register-form">

                <h2 class="form-signin-heading">Sign Up</h2>
                <hr />

         
                <input type="text" class="form-control" placeholder="Username" name="username" required />
                <input type="email" class="form-control" placeholder="Email address" name="email" required />
                <input type="password" class="form-control" placeholder="Password" name="password" required />
                <hr />
                <input type="submit" class="form-control" name="btn-signup" id="btn-signup" value="Submit" />
                <a href="index.php"><input type="button" class="form-control" value="Log In Here" /></a>
            </form>
        </div>
    </div>
</body>

</html>
