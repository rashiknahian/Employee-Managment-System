<?php
/*PHP Session Begins*/

session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();


?>
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
    
        <div class=" main">
            <p>Enter Employees' Data</p>
            <br>
            <div class="form-style">
            <form method="post" action="employeeDataSave.php" enctype='multipart/form-data'>
                
                    <input type="text" class="form-control" placeholder="Employee's Id" name="employeeId" required />
           
                    <input type="text" class="form-control" placeholder="Full Name" name="username" required />
        
                    <input type="text" class="form-control" placeholder="Designation" name="designation" required />
            
                    <input type="text" class="form-control" placeholder="Email" name="email" required />
          
                    <input type="text" class="form-control" placeholder="Phone No" name="phone" required />
    
                    <input type="text" class="form-control" placeholder="Address" name="address" required />
            
      
                    <input type="text" class="form-control" placeholder="Blood Group" name="bloodGroup" required />
         
                    <h3>Select image to upload:</h3>
                    <input class="form-control" type="file" name="image" />
            
                <br>
                <div class="form-group">
                   
                        <input type="submit" class="form-control" name="submit" value="Submit" />
                  
                   
                        <input type="reset" class="form-control" value="Reset">
                    



                </div>
            </form>
            </div>
        </div>
    
    <!-- ./Main Body -->


</body>

</html>
