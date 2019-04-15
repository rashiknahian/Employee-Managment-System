<?php
/*PHP Session Begins*/

session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

//DElete Data
    if(isset($_GET['del'])){
        //Save rows id in a variable using GET method
        $id = $_GET['del'];
        
        //Query for deleting data from database
        $query2 = $DBcon->query("DELETE FROM employeeData WHERE id=$id");
        
        //Query Execute
        $delete = $DBcon->query($query2);
        
        if($delete){
            $message = "Successfully Deleted";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else{
           
        }
    }
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
                    
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Delete</th>
                    

                </tr>
            </thead>
            <tbody>



                <?php
            $query2 = $DBcon->query("SELECT * FROM employeeData");
            while($data=$query2->fetch_array()){
                
                ?>

                <tr>

                    <td><?=$data['employeeId'];?></td>
                    <td><?=$data['username'];?></td>
                    <td>
                        <a  href="<?PHP $_SERVER['PHP_SELF']?>?del=<?PHP echo $data['id']?>">Delete</a>
                    </td>
                </tr>

                  <?PHP
            }
            //While Loop Ends
            ?>
            </tbody>
        </table>

    </div>
    <!-- ./Main Body -->

</body>

</html>
