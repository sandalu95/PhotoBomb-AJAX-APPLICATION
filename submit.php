<?php
	$title=$_POST['title'];
	$descrip=$_POST['descrip'];
	$cdate=$_POST['cdate'];
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
                            <h4 class="card-title">{$title}</h4>
                            <p class="card-text">{$descrip}</p>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="backside">
                    <div class="card">
                        <div class="card-body text-center mt-4">
                            <h4 class="card-title">{title}</h4>
                            <p class="card-text">{$cdate}</p>     
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

	$sql="INSERT INTO images(title,description,capturedate,image) VALUES ('$title','$descrip','$cdate','$img')";
	$sql2="SELECT * FROM images";
    $result = mysqli_query($con,$sql2);

	if (mysqli_query($con, $sql)) {
    	while($row = mysqli_fetch_array($result)) {
		    echo $deli;
		}
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($con);
?>