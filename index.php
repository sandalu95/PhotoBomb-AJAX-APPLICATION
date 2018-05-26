<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper row" >
		<div class="col-md-2" style="border-right: 1px solid #008B8B; padding-top: 150px; padding-left: 30px; padding-right: 20px; background-image:url(images/cover5.jpg); color:white; height: 100vh;">
			<div  style="width: 200px;">
				<label for="titlefield">Name</label>
				<input type="text" class="form-control" id="titlefield">
			</div>
			<div  style="width: 200px;">
				<label for="descfield" style="margin-top: 15px;">Skills</label>
				<input type="text" class="form-control" id="descfield">
			</div>
			<div  style="width: 200px;">
				<label for="datefield" style="margin-top: 15px;">Admission Date</label>
				<input type="date" class="form-control" id="datefield" min="2010-12-31">
			</div>
			<div style="margin-bottom: 40px;">
				<label for="imagefield" style="margin-top: 15px;">Image</label>
				<input type="file" id="imagefield" name="imagefield" multiple onchange="showname()" accept="image/x-png,image/gif,image/jpeg">
			</div>
			<button id="formsubmit" class="btn btn-info" style="width: 200px; margin-left: 5px;">Add Student</button>
		</div>

	<div class="col-md-10" style="float: right; padding-left: 0; padding-right: 0;">

		<!-- Team -->
		<section id="team" class="pb-5" >
	
		    <div class="container" style=" background-image: url(images/cover4.jpg); background-repeat: no-repeat; background-size: cover;">
		    	<a href="main.php" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true" style="margin-left: 1000px; margin-top: 20px;"><< Back </a>
		        <h5 class="section-title h1" style="color: white;">MIT (IT Special)</h5>
		        <div class="row" id="response" >
		        	<img src="images/IM LOGO proper.jpg" style="width:280px; height: 280px; margin: auto;">
		            <p style="margin:30px 60px; margin-top:110px; text-align: center; color: white; font-size: 17px;">Today Department of Industrial Management is home to a diverse undergraduate student body of nearly 175, hailing from almost every District in the country. Our students thrive in a challenging academic atmosphere and enjoy the rich cultural life of the Department of Industrial Management. </p>
		        </div>
		    </div>

		</section>
		<!-- Team -->
	</div>

</div>
</body>
</html>

