<!DOCTYPE html>

<html lang="en">

<head>
    <?php include "header.php";?>
</head>

<body>
    <!-- Responsive Navigation -->
    <?php include "navigation.php";?>
    <!-- ./Responsive Navigation -->

    <!-- Main Body -->
    <div class="col-md-12">
        <div class="container main">

            <div class="signin-form">

                <div class="container">


                    <form class="form-signin" method="post" id="register-form">

                        <h2 class="form-signin-heading">Sign Up</h2>
                        <hr />



                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email address" name="email" required />
                            <span id="check-e"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required />
                        </div>

                        <hr />

                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button>
                            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
        <!-- ./Main Body -->

        <!-- Footer -->

        <?php include "footer.php"?>
        <!-- ./Footer -->
    </div>
</body>

</html>
