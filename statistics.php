<?php
	include 'includes/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Statistics</title>
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
	 <div class="jumbotron">
	 	<div class="container">
	 		<?php 
				$query= "SELECT count(id)  AS total FROM guest" ;
				$result=mysqli_query($connection,$query);
				$value=mysqli_fetch_assoc($result);
				$num_rows=$value['total'];
				
 			?>
 			<?php 
				$query= "SELECT count(id) AS total FROM guest where checkin=1" ;
				$result=mysqli_query($connection,$query);
				$val=mysqli_fetch_assoc($result);
				$number=$val['total'];
				
				
 			?>
	 		<div style="text-align: center; font-size: 30px">
	 			Total number of guests: <span style="color: #20c997;"><?php echo $num_rows; ?></span><br>
	 			Number of guests checked in: <span style="color: #20c997;"><?php echo $number; ?></span>

	 			<div>
	 				<a href="index.php"><button class="btn btn-primary btn-lg">Main Page
	 					
	 				</button></a>
	 			</div>

	 			
	 		</div>
	 	</div>
	 </div>
</body>
</html>


