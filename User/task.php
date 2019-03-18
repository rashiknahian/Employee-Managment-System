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

    <div class="main">
        <p>Assign Task to Employee</p>
        <br>
        <div class="form-style">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Select Employee's Id</label>
                    <select name="employeeId">
                        <option value="">012345</option>
                        <option value="">012346</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Task" name="task" required />
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
