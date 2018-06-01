<?php
	$pname=$_POST['pname'];
	$profile=$_POST['profile'];
	$admissiondate=$_POST['admissiondate'];
	$img=$_POST['img'];

	// echo "$title $descrip $cdate <img src='"."images/".$img."'>";
$deli=<<<DELIMITER
	<div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
                <div class="frontside">
                    <div class="card">
                        <div class="card-body text-center">
                            <p><img class=" img-fluid" src="images/{$img}" alt="card image"></p>
                            <h4 class="card-title">{$pname}</h4>
                            <p class="card-text">{$profile}</p>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="backside">
                    <div class="card" style="height="120px;">
                        <div class="card-body text-center mt-4" style="padding:0 125px;">
                            <h4 class="card-title">{$pname}</h4>
                            <p class="card-text">{$admissiondate}</p>     
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
DELIMITER;


	$con= mysqli_connect('localhost','root','','ajax_app');
	if(!$con){
		die('Connection Error : '.mysqli_error($con));
	}

	$sql="INSERT INTO images(pname,profile,admissiondate,image) VALUES ('$pname','$profile','$admissiondate','$img')";
	$sql2="SELECT * FROM images";
    $result = mysqli_query($con,$sql2);

	if (mysqli_query($con, $sql)) {
		echo $deli;
    	while($row = mysqli_fetch_array($result)) {
			echo '<div class="col-xs-12 col-sm-6 col-md-4">';
	        echo '<div class="image-flip" ontouchstart="this.classList.toggle("hover");">';
	        echo '<div class="mainflip">';
	        echo '<div class="frontside">';
	        echo '<div class="card">';
	        echo '<div class="card-body text-center">';
	        echo '<p><img class=" img-fluid" src="images/'.$row['image'].'" alt="card image"></p>';
	        echo '<h4 class="card-title">'.$row['pname'].'</h4>';
	        echo '<p class="card-text">'.$row['profile'].'</p>';
	        echo '<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>';
	        echo '</div>';
	        echo '</div>';
	        echo '</div>';
	        echo '<div class="backside">';
	        echo '<div class="card" style="height="120px;">';
	        echo '<div class="card-body text-center mt-4" style="padding:0 125px;">';
	        echo '<h4 class="card-title">'.$row['pname'].'</h4>';
	        echo '<p class="card-text">'.$row['admissiondate'].'</p>';     
	        echo '</div>';
	        echo '</div>';
	        echo '</div>';
	        echo '</div>';
	        echo '</div>';
	        echo '</div>';
		}
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);
?>