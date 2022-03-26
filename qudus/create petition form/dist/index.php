<?php

include 'connect.php';

$id = $_GET['userid'];

$sql2 = "SELECT * FROM student where email='$id' ";

$result2 = mysqli_query($con,$sql2);


if($result2){
while($row = mysqli_fetch_assoc($result2)){

    $fname = $row['fname'];
    $lname = $row['lname'];

  }
}


           

if(isset($_POST['submit'])){


  $initiator  = $_POST['initiator'];
  $date = $_POST['date'];
  $status = $_POST['status'];

  $signatures = $_POST['signatures'];
  $title = $_POST['title'];

  $main = $_POST['main'];
  


  $sql = "insert into `petition` (initiator,date,status,signatures,title,main)

values   ('$initiator','$date','$status','$signatures','$title','$main') ";
$result = mysqli_query($con,$sql);

if($result) {

  echo '<script>alert("Data Insertion Successful")</script>';
  // header('Location: http://localhost/bolaji/dist/work.php');

}else{
  die(mysqli_error($con));
}

}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CREATE PETITION</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<form method="post">
<div class="container">
    <p>CREATE PETITION</p>
    
    <div class="login">
      <input type="hidden" placeholder="Name Of Petitioner" required value="<?php echo $fname." ".$lname ?>" class="input" name="initiator">
      <input type="date" placeholder="Date Of Creation" required class="input" name="date">
    </div>
    <div class="login">
      <input type="hidden" placeholder="Petition Status" value="Pending" class="input" name="status" required>
      <input type="hidden" placeholder="Signatures" value="1" class="input" name="signatures" required>

    </div>
    
    <div class="subject">
      <input type="text" placeholder="Petition Title" class="input" name="title" required>
    </div>
    
    <div class="msg">
      <textarea  class="area" placeholder="Petition Information" name="main" required></textarea>
    </div>
    
    <input class="btn" name="submit" type="submit" value="Create Petition"/>
  </div>
</form>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
