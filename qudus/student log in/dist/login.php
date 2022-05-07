<?php

include 'connect.php';

session_start();


if(!empty($_POST['submit'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM student WHERE email='$email' AND password='$password'";

  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);

  if($count > 0){
    echo "<script>alert('Log In Successful')</script>";

    header("Location: http://localhost/qudus/student%20log%20in/dist/index.php?userid=$email");
    $user_pin = mysqli_fetch_assoc($result);
    $_SESSION["id"] = $user_pin['id'];


  }else {
    echo "<script>alert('Log In Not Successful')</script>";

  }

}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Log In Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Student Log In Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form method="post">
          
          
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder=" Enter Your Email" required />
          </div>
        
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Enter Your Password" required />
          </div>        
           
          <input class="button" type="submit" name="submit" value="LOG IN" />
        </form>
      </div>
    </div>
  </div>
</div>
<p class="credit">Don't Have An Account? <a href="http://localhost/qudus/student%20log%20in/dist/signup.php" >Sign Up Here</a></p>
<!-- partial -->
  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>
</body>
</html>
