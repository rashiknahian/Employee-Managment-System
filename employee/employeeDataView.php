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

        <div class=" main">
            <p>View Employees' Data</p>

            <!-- Data View In Table-->
            <table id="employee">
                <thead>
                    <tr class="success">
                        <th>Image</th>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Blood Group</th>

                    </tr>
                </thead>
                <tbody>
                    
                   
               
                              <?php
            $query2 = $DBcon->query("SELECT * FROM employeeData WHERE user_id=$userRow");
            while($data=$query2->fetch_array()){
           echo "
                <tr>
                    <td>"."</p><img height=\"200px\" class=\"employeeImg\" src=\"view.php?id=".$data['id'] . " \"><br/><a href=\"view.php?id=".$data['id'] ."\" target=\"_blank\">Click to view large Image</a><hr/>"."</td>
                    <td>".$data['employeeId']."</td>
                    <td>".$data['username']."</td>
                    <td>".$data['designation']."</td>
                    <td>".$data['email']."</td>
                    <td>".$data['phone']."</td>
                    <td>".$data['address']."</td>
                    <td>".$data['bloodGroup']."</td>
                </tr>
                "; 
            }
            //While Loop Ends
            ?>
                </tbody>
            </table>

        </div>
        <!-- ./Main Body -->
  
</body>

</html>
