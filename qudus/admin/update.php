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

  echo "<script>confirm('Data Updated Successfully')</script>";

  header('location:http://localhost/qudus/admin/updatepetition.php');
     

}else{
  die(mysqli_error($con));
}

}

?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Update Petition - ADMIN</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="styleupdate.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form  method="post">
        <h1> Update Petition </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your Petition Title</legend>
        
          <label for="name">Title:</label>

          <input type="text"  name="title"  value=" <?php echo $title;?>" required>
          <br>
          <!-- <legend><span class="number">2</span>Petition Initiator</legend>        
        <label for="name">Initiator :</label> -->


          <input type="hidden" name="initiator" value=" <?php echo $initiator;?>" required>
          <br>
          <!-- <legend><span class="number">3</span>Petition Signatures</legend>        
        <label for="name">Signatures :</label> -->

          <input type="hidden"  name="signatures" value=<?php echo $signatures;?> required>
<br>
          <legend><span class="number">2</span>Petition Date</legend>        
        <label for="name">Date :</label>
      
          <input type="date" name="date" value=<?php echo $date;?> required>

          
        </fieldset>
        <br>
        <fieldset>  

        <legend><span class="number">3</span> Petition Status</legend>

<label for="job">Status:</label>
 <select id="job" name="status">

 <option value = <?php
              
              echo $status;
              
              ?>>----
              <?php
              
              echo $status;
              
              ?>-----</option>
   
     <option value="pending">Pending</option>
     <option value="approved">Approved</option>
     <option value="disapproved">Disapproved</option>
 </select>
 <br>
 <br>
 <br>
          <legend><span class="number">4</span> Your Petition Body</legend>
          
         <label for="bio">Body:</label>
          <textarea name="main" value="<?php echo $main;?>" required><?php echo $main;?></textarea>
        
       
         
          
          
          
         </fieldset>
       
         <button type="submit" name="submit">Update Petition</button>
        
       </form>
        </div>
      </div>
      
    </body>
</html>
<!-- partial -->
  
</body>
</html>
