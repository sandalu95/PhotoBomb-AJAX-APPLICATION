<?php 
	$con = mysqli_connect('localhost','root','','ajax_app');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));

    }
 		$pname = $_POST['search'];
 		$strSql="DELETE FROM images WHERE pname='$pname'";
 		if(mysqli_query($con, $strSql)){
 			echo "Record deleted successfully";
 		}
 		else{
 			echo "Error: " . $sql . "<br>" . mysqli_error($con);
 		}


?>