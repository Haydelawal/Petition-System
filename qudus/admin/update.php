<?php

include 'connect.php';

$id = $_GET['updateid'];
$sql = "select * from `petition` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id =$row['id'];

            $initiator =$row['initiator'];
            $date =$row['date'];
            $status =$row['status'];

            $signatures =$row['signatures'];
            $title =$row['title'];
            $main =$row['main'];



if(isset($_POST['submit'])){

$initiator =$_POST['initiator'];
$date =$_POST['date'];
$status =$_POST['status'];

$signatures =$_POST['signatures'];
$title =$_POST['title'];
$main =$_POST['main'];


$sql = "update `petition` set id=$id, 
initiator = '$initiator',
date ='$date',
status ='$status',

signatures ='$signatures',
title ='$title',
main ='$main'
 
where id=$id
 ";

 $result = mysqli_query($con,$sql);


// $result = mysqli_query($con,$sql);

if($result) {

  // header("Location: http://localhost/bolaji/dist/work.php");

  header('location:http://localhost/qudus/admin/updatepetition.php');
  echo '<script>confirm("Data Updated Successfully")</script>';
     

}else{
  die(mysqli_error($con));
}

}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Update Petition</title>
  <link rel="stylesheet" href="./style2.css">

</head>
<body>
<!-- partial:index.partial.html -->

<form method="post">
<div class="container">
    <p>UPDATE PETITION</p>
    
    <div class="login">
      <input  placeholder="Name Of Petitioner" required class="input" name="initiator"  value=" <?php echo $initiator;?>" >
      <input type="date" placeholder="Date Of Creation" required class="input" name="date"   value=" <?php echo $date;?>">
    </div>
    <div class="login">
      <input  placeholder="Petition Status" class="input" name="status" required    value="<?php echo $status;?>">

      
      <input placeholder="Signatures" class="input" name="signatures" required   value="<?php echo $signatures;?>">

    </div>
    
    <div class="subject">
      <input type="text" placeholder="Petition Title" class="input" name="title" required   value="<?php echo $title;?>">
    </div>
    
    <div class="msg">
      <input  class="area" placeholder="Petition Information" name="main" required value="<?php echo $main;?>">
    </div>
    
    <input class="btn" name="submit" type="submit" value="Update Petition"/>
  </div>
</form>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
