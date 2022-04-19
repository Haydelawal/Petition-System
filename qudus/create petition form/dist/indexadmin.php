<?php

include 'connect.php';

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
  <title>Create Petition - ADMIN</title>
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
        
          <label for="name">Title:</label>

          <input type="text"  name="title" required>
          <br>
          <legend><span class="number">2</span>Petition Initiator</legend>        
        <label for="name">Initiator :</label>


          <input type="text" name="initiator" required>
          <br>
          <legend><span class="number">3</span>Petition Signatures</legend>        
        <label for="name">Signatures :</label>

          <input type="number"  name="signatures" value="1" required>
<br>
          <legend><span class="number">4</span>Petition Date</legend>        
        <label for="name">Date :</label>
      
          <input type="date" name="date"  required>

          
        </fieldset>
        <br>
        <fieldset>  

        <legend><span class="number">5</span> Petition Status</legend>

<label for="job">Status:</label>
 <select id="job" name="status">
   
     <option value="pending">Pending</option>
     <option value="approved">Approved</option>
     <option value="disapproved">Disapproved</option>
 </select>
 <br>
          <legend><span class="number">6</span> Your Petition Body</legend>
          
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
