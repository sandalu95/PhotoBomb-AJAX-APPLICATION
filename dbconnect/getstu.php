<?php
    $q = $_GET['q'];

    $con = mysqli_connect('localhost','root','','ajax_app');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    $sql="SELECT * FROM images WHERE pname = '".$q."'";
    $result = mysqli_query($con,$sql);

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

    mysqli_close($con);
?>