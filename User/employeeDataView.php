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
                    <tr>
                        <td><img src="img/user-307993__340.png" alt="" style="height:200px;Width:200px"></td>
                        <td>01231</td>
                        <td>Nilanjana Roy</td>
                        <td>ABC</td>
                        <td>abc@example.com</td>
                        <td>+88011111111</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>0 (+)ve</td>
                    </tr>
                       <tr>
                        <td><img src="img/user-307993__340.png" alt="" style="height:200px;Width:200px"></td>
                        <td>01232</td>
                        <td>Nusrat jahan</td>
                        <td>ABC</td>
                        <td>abc@example.com</td>
                        <td>+88011111111</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>0 (-)ve</td>
                    </tr> 
                        <tr>
                        <td><img src="img/dummy-user-img-1.png" alt="" style="height:200px;Width:200px"></td>
                        <td>01233</td>
                        <td>Zillur Rahman</td>
                        <td>ABC</td>
                        <td>abc@example.com</td>
                        <td>+88011111111</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>B (+)ve</td>
                    </tr>
                    <tr>
                        <td><img src="img/dummy-user-img-1.png" alt="" style="height:200px;Width:200px"></td>
                        <td>01234</td>
                        <td>Rashik Ishrak Nahian</td>
                        <td>ABC</td>
                        <td>abc@example.com</td>
                        <td>+88011111111</td>
                        <td>Dhaka, Bangladesh</td>
                        <td>0 (+)ve</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <!-- ./Main Body -->
    </div>
</body>

</html>
