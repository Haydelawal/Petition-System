<?php

include 'connect.php';

if(isset($_POST['submit'])){


  $fname  = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];

  $email = $_POST['email'];
  $password = $_POST['password'];

  $gender = $_POST['gender'];
  $department = $_POST['department'];
  $level = $_POST['level'];


  $sql = "insert into `student` (fname,lname,phone,email,password,gender,department,level)

values   ('$fname','$lname','$phone','$email','$password','$gender','$department','$level') ";
$result = mysqli_query($con,$sql);

if($result) {

  echo '<script>alert("Sign Up Succesful, Log In To Proceed")</script>';


  header('Location: http://localhost/qudus/student%20log%20in/dist/login.php');
  echo '<script>alert("Sign Up Succesful, Log In To Proceed")</script>';


}else{
  echo '<script>alert("SIGN UP NOT SUCCESSFUL")</script>';
}

}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Sign Up Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Student Sign Up Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form method="post">

          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="fname" placeholder="First Name" required/>
              </div>
            </div>

            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="lname" placeholder="Last Name" required/>
              </div>
            </div>
            
          </div>

          <div class="row clearfix">
            
            <!-- <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="age" placeholder="Age" required />
              </div>
            </div> -->

            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                <input type="text" name="phone" placeholder="Phone Number" required/>
              </div>
            </div>
          </div>

          
          
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" required />
          </div>
        
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="password" placeholder="Create Your Password" required />
          </div>
            	
              <div class="input_field select_option">
                <select required name="gender"> 
                  <option>Select a Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
                <div class="select_arrow"></div>
              </div>

              <div class="input_field select_option">
                <select required name="department"> 
                  <option>Select a Department</option>
                  <option>Computer Science</option>
                  <option>Physics</option>
                  <option>Chemistry</option>
                  <option>Botany</option>
                </select>
                <div class="select_arrow"></div>
              </div>

              <div class="input_field select_option">
                <select required name="level"> 
                  <option>Current Year Level</option>
                  <option>100</option>
                  <option>200</option>
                  <option>300</option>
                  <option>400</option>
                  <option>500</option>
                </select>
                <div class="select_arrow"></div>
              </div>

              
             

              
            <!-- <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb1" required>
    			<label for="cb1">I agree with terms and conditions</label>
            </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb2" required>
    			<label for="cb2">I want to receive the newsletter</label>
            </div> -->
          <input class="button" type="submit" name="submit" value="Register" />
        </form>
      </div>
    </div>
  </div>
</div>
<p class="credit">Already Have An Account? <a href="login.php" >Log In Here</a></p>
<!-- partial -->
  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>
</body>
</html>
