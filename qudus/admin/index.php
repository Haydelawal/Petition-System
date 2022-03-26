<?php

include 'connect.php';

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","qudus") or die(mysqli_error());
$query2 = "SELECT COUNT(*) AS count FROM `petition` WHERE `status` ='Pending'";

$query_result2 = mysqli_query($conn, $query2);

while($row2 = mysqli_fetch_assoc($query_result2)){
  $output2 = $row2['count'];

}


$sql2 = "SELECT * FROM `petition`";
$result2 = mysqli_query($conn, $sql2);

?>


<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","qudus") or die(mysqli_error());
$query3 = "SELECT COUNT(*) AS count FROM `petition` WHERE `status` ='Approved'";

$query_result3 = mysqli_query($conn, $query3);

while($row3 = mysqli_fetch_assoc($query_result3)){
  $output3 = $row3['count'];

}


$sql3 = "SELECT * FROM `petition`";
$result3 = mysqli_query($conn, $sql3);

?>


<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","qudus") or die(mysqli_error());
$query4 = "SELECT COUNT(*) AS count FROM `petition` WHERE `status` ='Disapproved'";

$query_result4 = mysqli_query($conn, $query4);

while($row4 = mysqli_fetch_assoc($query_result4)){
  $output4 = $row4['count'];

}


$sql4 = "SELECT * FROM `petition`";
$result4 = mysqli_query($conn, $sql4);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","qudus") or die(mysqli_error());
$query22 = "SELECT COUNT(*) AS count FROM `petition` ";

$query_result22 = mysqli_query($conn, $query22);

while($row22 = mysqli_fetch_assoc($query_result22)){
  $output22 = $row22['count'];

}


$sql22 = "SELECT * FROM `petition`";
$result22 = mysqli_query($conn, $sql22);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","qudus") or die(mysqli_error());
$query23 = "SELECT COUNT(*) AS count FROM `student` ";

$query_result23 = mysqli_query($conn, $query23);

while($row23 = mysqli_fetch_assoc($query_result23)){
  $output23 = $row23['count'];

}


$sql23 = "SELECT * FROM `student`";
$result23 = mysqli_query($conn, $sql23);

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
			<li class="active">
				<a href="#">
					<i class='bx bxs-home' ></i>
					<span class="text">Home</span>
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
					<span class="text" >Logout</span>
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
							<a class="active" href="#">Home</a>
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
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3><?php echo $output22;?></h3>
						<p>Petitions</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo $output23;?></h3>
						<p>Petitioners</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-message-dots' ></i>
					<span class="text">
						<h3><?php echo $output2; ?></h3>
						<p>Pending Petitions</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Most Recent Petitions</h3>
					
					</div>
					<table>
						<thead>
							<tr>
								<th>Date</th>
								<th>Title</th>
								<th>Initiator</th>

								<th>Status</th>
								<th> Signatures</th>
							</tr>
						</thead>
						<tbody>
						<?php
         $sql = "select * from `petition` ORDER BY `date` DESC";
         $result = mysqli_query($con, $sql);
         if($result){


          while($row = mysqli_fetch_assoc($result)){

            $date =$row['date'];

            $title =$row['title'];
			$initiator = $row['initiator'];
            $signatures =$row['signatures'];
            $status =$row['status'];


           


            echo '<tr>
            <th scope="row">'.$date.'</th>
            <td>'.$title.'</td>
			<td>'.$initiator.'</td>

            <td><span class="status completed">'.$status.'</span></td> 
			<td>'.$signatures.'</td>           
            
          </tr>';

          }
         }
        
        
        ?>

							
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Petitions Overview</h3>
						
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Approved Petitions = <?php echo $output3; ?></p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="pending">
							<p>Pending Petitions = <?php echo $output2; ?></p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Disapproved Petitions = <?php echo $output4; ?></p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>