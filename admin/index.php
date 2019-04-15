<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	exit;
}

if (isset($_POST['btn-login'])) {
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT user_id, email, password FROM users WHERE email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: home.php");
	} else {
		$msg = "<script type='text/javascript'> Invalid Username or Password !</script>";
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
            <form class="form-signin" class="form-control" method="post" id="login-form">
                <h2 class="form-signin-heading" >Sign In.</h2>
                <hr />

                <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
                <input type="email" class="form-control" placeholder="Email address" name="email" required />
                <input type="password" class="form-control" placeholder="Password" name="password" required />
                <hr />
                <input type="submit" class="form-control" name="btn-login" id="btn-login" value="Submit" />
                <a href="register.php"><input type="button" class="form-control" value="Sign UP Here" /></a>
            </form>
        </div>
    </div>
</body>
</html>
