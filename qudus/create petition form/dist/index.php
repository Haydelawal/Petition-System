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
  values ('$initiator','$date','$status','$signatures','$title','$main') ";
$result = mysqli_query($con,$sql);

if($result) {

  echo "<script>alert('Data Insertion Successful')</script>";

}else{
  die(mysqli_error($con));
}

}

?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Create Petition</title>
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
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form  method="post">
        <h1> Create Petition </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your Petition Title</legend>
        
        
          <input type="hidden"  value="<?php echo $fname." ".$lname ?>" name="initiator" required>
          <input type="hidden"  name="status" value="Pending" required>

          <input type="hidden"  name="signatures" value="1" required>

       
          <label for="name">Title:</label>

          <input type="text"  name="title" required>
      
          <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="date"  required>

          
        </fieldset>
        <br>
        <fieldset>  
        
          <legend><span class="number">2</span> Your Petition Body</legend>
          
         <label for="bio">Body:</label>
          <textarea name="main" required></textarea>
        
       
        
      
          
          
          
         </fieldset>
       
        <button type="submit" name="submit">Create Petition</button>
        
       </form>
        </div>
      </div>
      
    </body>
</html>
<!-- partial -->
  
</body>
</html>
