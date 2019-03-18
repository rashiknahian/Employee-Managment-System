<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php";?>
    <link rel="stylesheet" href="">
</head>

<body>
    <!-- Responsive Navigation -->
    <?php include "navigation.php";?>
    <!-- ./Responsive Navigation -->

    <!-- Main Body -->
    
        <div class=" main">
            <p>View Employees' Attendance</p>

            <!-- Data View In Table-->
            <table id="employee">
                <thead>
                    <tr class="success">
                        <th>Employee Id</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Duration</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>012345</td>
                        <td>22/2/19</td>
                        <td>0921</td>
                        <td>0621</td>
                        <td>9 Hrs</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <!-- ./Main Body -->

    
</body>

</html>
