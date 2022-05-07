<?php

include 'connect.php';
session_start();


$id = $_GET['userid'];


$sql = "SELECT * FROM student where email='$id' ";

$result = mysqli_query($con,$sql);


if($result){
while($row = mysqli_fetch_assoc($result)){

    $lname = $row['lname'];

    $phone = $row['phone'];
    $password = $row['password'];

    $gender = $row['gender'];
    $department = $row['department'];
    $level = $row['level'];  
      $fname = $row['fname'];


}
}


           ?>  




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Profile Page</title>
  <link rel="stylesheet" href="./style2.css">
  <script src="logout.js"></script>


</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>

        <!-- Navbar -->
        <ul>
           <?php echo '<li>
                <a href="http://localhost/qudus/create%20petition%20form/dist/index.php?userid='.$id.'">
                <span >Create A Petition</span>
                    <i class="fa fa-edit fa-2x"></i>
                </a>
            </li>'; ?>
            <li>
                <a href="http://localhost/qudus/list%20petition/list.php">
                    <span >View Petitions</span>
                    <i class="fa fa-address-card fa-2x"></i>
                </a>
            </li>
            <li>
                <a onclick="logout()">
                <span >Sign Out</span>
                    <i class="fa fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
        <!-- End -->
    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" alt="" width="100" height="100">

            <div class="name">
                  Home Page 
            </div>
            <div class="job">
                
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Student</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="#settings">Profile</a>
                <hr align="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>User Details</h2>
        <div class="card">
            <div class="card-body">
                <!-- <i class="fa fa-user"></i> -->
                <table>
                    <tbody>

                   <tr>
                            <td>First Name</td>
                            <td>:</td>
                            <td>
                            <?php echo $fname; ?>

                            </td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>:</td>
                            <td>                            
                            <?php echo $lname; ?>
  
                        </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                            <?php echo $id; ?>

                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                            <?php echo $password; ?>

                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                            <?php echo $gender; ?>

                            </td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td>:</td>
                            <td>
                            <?php echo $department; ?>

                            </td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td>:</td>
                            <td>
                            <?php echo $level; ?>

                            </td>
                        </tr>

  
                    </tbody>
                </table>
            </div>
        </div>

     
    </div>
    <!-- End -->
</body>
</html>
<!-- partial -->
  
</body>
</html>
