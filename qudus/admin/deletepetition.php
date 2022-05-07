<?php

include 'connect.php';

if(isset($_GET['updateid'])){
	$id = $_GET['updateid'];
  
	$sql = "select `id` from `petition` where id=$id";
  
	$result = mysqli_query($con, $sql);
	if($result){
   //   echo '<script>alert("Data Updated Successfully")</script>';     
	 }else {
	  die(mysqli_error($con));
  
	}
  }
  

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","qudus") or die(mysqli_error());
$query2 = "SELECT COUNT(*) AS count FROM `petition` ";

$query_result2 = mysqli_query($conn, $query2);

while($row2 = mysqli_fetch_assoc($query_result2)){
  $output2 = $row2['count'];

}


$sql2 = "SELECT * FROM `petition`";
$result2 = mysqli_query($conn, $sql2);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Admin Page</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-group'></i>
			<span class="text">Admin Page</span>
		</a>
		<ul class="side-menu top">
			<li class>
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Petitions</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Petitioners</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Add A Petition</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Edit A Petition</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<!-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> -->
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link">Categories</a> -->
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<p>Dark Mode</p>
			<label for="switch-mode" class="switch-mode"></label> -->
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a> -->
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Petitions</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><?php echo $output2; ?></h3>
						<p>Petitions</p>
					</span>
				</li>
				<!-- <li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Petitioners</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Flagged Petitions</p>
					</span>
				</li> -->
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Petitions</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Initiator</th>
								<th>Date</th>
								<th>Title</th>

								<th>Main</th>
								<th>Status</th>
								<th>Signatures</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>



						<?php
         $sql = "select * from `petition`";
         $result = mysqli_query($con, $sql);
         if($result){


          while($row = mysqli_fetch_assoc($result)){

			$id = $row['id'];

			$initiator = $row['initiator'];
            $date =$row['date'];
		
			$title =$row['title'];
			$main =$row['main'];
			$status =$row['status'];

            $signatures =$row['signatures'];


            echo '<tr>
            <td>'.$initiator.'</td>
            <td>'.$date.'</td>
			
			<td>'.$title.'</td>           
			<td>'.$main.'</td>      
			
			<td><span class="status completed">'.$status.'</span></td>

            <td>'.$signatures.'</td> 
			<td>
			<button type="submit" class="status process"><i><a class="none" href="delete.php?deleteid='.$id.'">Delete</a></i></button>
			
			</td>
            
          </tr>';

          }
         }
        
        
        ?>

							
							
							
						</tbody>
					</table>
				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Petitions</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Petition 1</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Petition 2</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Petition 3</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Petition 4</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Petition 5</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>