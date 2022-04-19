<?php

include 'connect.php';

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
	<script src="logout.js"></script>

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
			<li>
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
			<li class="active">
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
			<form action="#">
				<div class="form-input">
					<input type="search" name="search" placeholder="Search By Title Or Body Of Petition...">
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
							<a class="active" href="#">Search Petitions</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Petitions</h3>
					
					</div>
					<table>
						<thead>
							<tr>
								<th>Initiator</th>
								<th>Date</th>
								<th>Title</th>

								<th>Status</th>
								<th>Signatures</th>
							</tr>
						</thead>
						<tbody>



						<?php
						if (isset($_GET['search'])) {

            $title =$_GET['search'];
             $main =$_GET['search'];
                    $sql = "SELECT * FROM petition WHERE title LIKE '%$title%' OR main LIKE '%$main%'";

$exe = mysqli_query($con,$sql) or die(mysqli_error());

// if (mysqli_num_rows($exe) > 0) {
//   $count = 0;

if ($exe){
	while($row = mysqli_fetch_assoc($exe)){

			$initiator = $row['initiator'];
            $date =$row['date'];
		
			$title =$row['title'];
			$status =$row['status'];

            $signatures =$row['signatures'];


            echo '<tr>
            <td>'.$initiator.'</td>
            <td>'.$date.'</td>
			
			<td>'.$title.'</td>           
			
			<td><span class="status completed">'.$status.'</span></td>

            <td>'.$signatures.'</td> 
            
          </tr>';

          }
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