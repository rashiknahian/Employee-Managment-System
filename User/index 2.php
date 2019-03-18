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


                    <form class="form-signin" method="post" id="login-form">

                        <h2 class="form-signin-heading">Sign In.</h2>
                        <hr />

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email address" name="email" required />
                            <span id="check-e"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required />
                        </div>

                        <hr />

                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button>

                            <a href="register.php" class="btn btn-default" style="float:right;">Sign UP Here</a>

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
