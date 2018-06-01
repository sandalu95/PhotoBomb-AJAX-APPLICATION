<!DOCTYPE html>
<html>

<head>
	<title>Photo Bomb</title>
	<!-- stylesheets -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- scripts -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/viewall.js"></script>
</head>

<body style="background-image: url(images/cover.png); background-repeat: no-repeat; background-size: cover;">
	<div class="container" id="containerdiv">
		<div class="jumbotron" style="margin-top:130px; padding: 100px; padding-top:75px; width: 450px; margin-left: 350px;" >
			<h1 style="text-align: center; margin-bottom: 30px;">MIT <br>Photo Bomb</h1>
			<a href="index.php" class="btn btn-info btn-lg btn-block" tabindex="-1" role="button" aria-disabled="true" style="margin-bottom: 10px;">Add Students</a>
			<a href="#" class="btn btn-info btn-lg btn-block" tabindex="-1" role="button" aria-disabled="true" style="margin-bottom: 10px;" onclick="searchbar()">View All Students</a>
			<a href="update.php" class="btn btn-info btn-lg btn-block" tabindex="-1" role="button" aria-disabled="true" style="margin-bottom: 10px;">Delete / Update Students</a>
		</div>
	</div>
</body>

</html>