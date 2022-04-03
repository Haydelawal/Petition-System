<?php

include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Petitions</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="styless.css">
</head>
<body>


<div class="wrapper">
	<div class="links">
		<ul>
			<li data-view="list-view" class="li-list active">
			<i class="fas fa-fist-raised"></i>
			List Of Petitions 
		</li>
		</ul>
	</div>


	

	<div class="view_main">
		<div class="view_wrap list-view" style="display: block;">
		

		<?php
         $sql = "select * from `petition`";
         $result = mysqli_query($con, $sql);
         if($result){


          while($row = mysqli_fetch_assoc($result)){

			$id=$row['id'];

			$title =$row['title'];
			$main =$row['main'];

			$signatures =$row['signatures'];


            $date =$row['date'];
            $status =$row['status'];

			echo'
		
		<div class="view_item">
				<div class="vi_left">
					<img src="tomato.png">
				</div>
			

				<div class="vi_right">
					<p class="title">'.$title.'</p>
					<p class="content">'.$date.'</p>
					<p class="content">'.$status.'</p>
					<div class="btn"><a href="index.php?indexid='.$id.'">View More</a></div>
				</div>
			</div>';

		  }
		}
			?>
			
		</div>
		
	</div>
</div>
	
<script src="scriptss.js"></script>

</body>
</html>