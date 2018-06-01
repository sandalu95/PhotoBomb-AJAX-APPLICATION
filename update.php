<!DOCTYPE html>
<html>

<head>
	<title>Update</title>
	<!-- stylesheets -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- script files -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/showstu.js"></script>
</head>

<body style="background-image: url(images/cover.png); background-repeat: no-repeat; background-size: cover;">
	<div class="container">
		<div class="jumbotron" style="margin-top:30px;">
			<h3 style="color:#008B8B; display:inline;">Select the student:</h3>
			<a href="main.php" class="btn btn-outline-info" style="float:right;"><< Back</a>
      		<?php
      			$con= mysqli_connect('localhost','root','','ajax_app');
				if(!$con){
					die('Connection Error : '.mysqli_error($con));
				}
				$sql="SELECT pname FROM images";
				$result = mysqli_query($con,$sql);
				echo '<select id="inputState" class="form-control" style="margin-top: 30px;" onchange="showstudent(this.value)">';
				echo '<option selected>Choose...</option>';
				while ($row = mysqli_fetch_array($result)) {
					echo '<option value="'.$row['pname'].'">'.$row['pname'].'</option>';
				}
				echo "</select>";
      		?>
		</div>
		<div id="display" class="row"></div>
		<div id="btndisplay" style='padding-left:130px;'></div>
	</div>
</body>

</html>