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
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Employee's Id" name="employeeId" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name" name="username" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Designation" name="designation" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone No" name="phone" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Address" name="address" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Blood Group" name="bloodGroup" required />
                </div>
                <div class="form-group">
                    <h3>Select image to upload:</h3>
                    <input class="form-control" type="file" name="image" />
                </div>
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
