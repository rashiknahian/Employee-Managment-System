<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
     
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        //Database Connection Establish
        include "dbconnect.php";
        
        //Variables for Form Data
        $employeeId = mysqli_real_escape_string($DBcon, $_POST['employeeId']);
        $username = mysqli_real_escape_string($DBcon, $_POST['username']);
        $designation = mysqli_real_escape_string($DBcon, $_POST['designation']);
        $email = mysqli_real_escape_string($DBcon, $_POST['email']);
        $phone = mysqli_real_escape_string($DBcon, $_POST['phone']);
        $address = mysqli_real_escape_string($DBcon, $_POST['address']);
        $bloodGroup = mysqli_real_escape_string($DBcon, $_POST['bloodGroup']);
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert Form Data into database
        $insert = $DBcon->query("INSERT into employeeData (employeeId,username,designation,email,phone,address,bloodGroup,image,created) VALUES ('$employeeId','$username','$designation','$email','$phone','$address','$bloodGroup','$imgContent', '$dataTime')");
        if($insert){
            echo "<h1>Successfully data Recorded.</h1><br><a href=\"employeeDataAdd.php\">  Back </a>";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
