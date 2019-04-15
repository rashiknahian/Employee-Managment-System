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
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- Responsive Navigation -->
    <?php include "navigation.php";?>
    <!-- ./Responsive Navigation -->

    <!-- Main Body -->
    <div class="col-md-12">
        <div class=" main">
            <p>View Employees' Task</p>

            <!-- Data View In Table-->
            <table id="employee">
                <thead>
                    <tr class="success">
                        
                        <th>Id</th>
                        <th>Assigned Task</th>
                        <th>Assigned Time</th>
                        <th>Deadline</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query2 = $DBcon->query("SELECT * FROM task");
                    while($data=$query2->fetch_array()){
                   echo "
                        <tr>
                            
                            <td>".$data['employeeId']."</td>
                            <td>".$data['task']."</td>
                            <td>".$data['created']."</td>
                            <td>".$data['deadline']."</td>
                            
                        </tr>
                        "; 
                    }
                    //While Loop Ends
                    ?>
                   
                </tbody>
            </table>

        </div>
        <!-- ./Main Body -->
    </div>
</body>

</html>
