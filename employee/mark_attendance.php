
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
            <p>Enter Attendance Data</p>
            <br>
            <div class="form-style">
            <form method="post" action="mark_attendance_save.php" enctype='multipart/form-data'>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Employee's Id" name="employeeId" required />
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Entry Time" name="starttime" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Exit Time" name="endtime" required />
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="submit" class="form-control" name="submit" value="Submit" />
                    </div>
                    <div class="col-md-6">
                        <input type="reset" class="form-control" value="Reset">
                    </div>



                </div>
            </form>
        </div>
    </div>
    <!-- ./Main Body -->


</body>

</html>
