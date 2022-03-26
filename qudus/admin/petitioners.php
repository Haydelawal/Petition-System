<?php

include 'connect.php';

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","qudus") or die(mysqli_error());
$query2 = "SELECT COUNT(*) AS count FROM `student` ";

$query_result2 = mysqli_query($conn, $query2);

while($row2 = mysqli_fetch_assoc($query_result2)){
  $output2 = $row2['count'];

}


$sql2 = "SELECT * FROM `student`";
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

	<title>Admin Page - Petitioners</title>
	<script src="logout.js"></script>

	
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
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="petitions.php">
					<i class='bx bxs-news' ></i>
					<span class="text">Petitions</span>
				</a>
			</li>
			<li class="active">
				<a href="petitioners.php">
					<i class='bx bxs-user' ></i>
					<span class="text">Petitioners</span>
				</a>
			</li>
			<li>
				<a href="http://localhost/qudus/create%20petition%20form/dist/indexadmin.php">
					<i class='bx bxs-file' ></i>
					<span class="text">Add A Petition</span>
				</a>
			</li>
			<li>
				<a href="updatepetition.php">
					<i class='bx bxs-edit' ></i>
					<span class="text">Edit A Petition</span>
				</a>
			</li>
			<li>
				<a href="delete.php">
					<i class='bx bxs-x-circle' ></i>
					<span class="text">Delete A Petition</span>
				</a>
			</li>
			<li>
				<a href="search.php">
					<i class='bx bxs-file-find' ></i>
					<span class="text">Search For A Petition</span>
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
				<a onclick="logout()" class="logout">
					<i class='bx bx-undo' ></i>
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
			<!-- <form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form> -->
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<p>Dark Mode</p>
			<label for="switch-mode" class="switch-mode"></label> -->
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a> -->
			<!-- <a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
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
							<a class="active" href="#">Petitioners</a>
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
					<i class='bx bxs-user' ></i>
					<span class="text">
						<h3><?php echo $output2; ?></h3>
						<p>Petitioners</p>
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
						<h3>Petitioners</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>

								<th>Phone</th>
								<th>Email</th>
								
								<th>Password</th>
								<th>Gender</th>
								
								<th>Department</th>
								<th>Level</th>
							</tr>
						</thead>


						<tbody>
						<?php
         $sql = "select * from `student`";
         $result = mysqli_query($con, $sql);
         if($result){


          while($row = mysqli_fetch_assoc($result)){

			$fname = $row['fname'];
            $lname =$row['lname'];
		
			$phone =$row['phone'];
			$email =$row['email'];
			$password =$row['password'];

            $gender =$row['gender'];
			$department =$row['department'];
			$level =$row['level'];


            echo '<tr>
            <td>'.$fname.'</td>
            <td>'.$lname.'</td>
			
			<td>'.$phone.'</td>           
			<td>'.$email.'</td>      
			
			<td>'.$password.'</td>

            <td>'.$gender.'</td> 
            <td>'.$department.'</td> 
            <td>'.$level.'</td> 
            
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