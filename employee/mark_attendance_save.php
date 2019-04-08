<?php
//Database Connection Establish
include "dbconnect.php";

//Variables for Form Data
$employeeId = mysqli_real_escape_string($DBcon, $_REQUEST['employeeId']);
$starttime = mysqli_real_escape_string($DBcon, $_REQUEST['starttime']);
$endtime = mysqli_real_escape_string($DBcon, $_REQUEST['endtime']);
$dataTime = date("Y-m-d H:i:s");

 
// attempt insert query execution
$query = "INSERT INTO attendance (employeeId, starttime,endtime,date) VALUES ('$employeeId', '$starttime','$endtime','$dataTime' )";
if(mysqli_query($DBcon, $query)){
    echo "<h1>Successfully data Recorded.</h1><br><a href=\"mark_attendance.php\">  Back </a>";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($DBcon);
}
 
// close connection
mysqli_close($DBcon);
?>