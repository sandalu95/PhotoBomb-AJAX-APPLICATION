<?php
 	$con = mysqli_connect('localhost','root','','ajax_app');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}
	
	if (isset($_POST['search'])) {
 		$pname = $_POST['search'];
   		$Query = "SELECT * FROM images WHERE pname LIKE '$pname%' LIMIT 5";
   		$ExecQuery = mysqli_query($con, $Query);
 
   		while ($Result = mysqli_fetch_array($ExecQuery)) {

$deli=<<<DELIMITER
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
			<div class="mainflip">
			    <div class="frontside">
			        <div class="card">
			            <div class="card-body text-center">
			                <p><img class=" img-fluid" src="images/{$Result['image']}" alt="card image"></p>
			                <h4 class="card-title">{$Result['pname']}</h4>
			                <p class="card-text">{$Result['profile']}</p>
			                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
			            </div>
			        </div>
			    </div>
			    <div class="backside">
			        <div class="card" style="height="120px;">
			            <div class="card-body text-center mt-4" style="padding:0 125px;">
			                <h4 class="card-title">{$Result['pname']}</h4>
			                <p class="card-text">{$Result['admissiondate']}</p>     
			            </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
DELIMITER;

		echo $deli;

		}
		
		mysqli_close($con);
	}


?>

