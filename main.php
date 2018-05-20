<!DOCTYPE html>
<html>
<head>
	<title>Photo Bomb</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="container" id="containerdiv">
		<div class="jumbotron" style="margin-top:130px; padding: 100px; width: 450px; margin-left: 350px;" >
			<h1 style="text-align: center; margin-bottom: 30px;">Photo Bomb</h1>
			<a href="index.php" class="btn btn-info btn-lg btn-block" tabindex="-1" role="button" aria-disabled="true" style="margin-bottom: 10px;">Add Students</a>
			<a href="#" class="btn btn-info btn-lg btn-block" tabindex="-1" role="button" aria-disabled="true" style="margin-bottom: 10px;" onclick="searchbar()">View All Students</a>
			<a href="#" class="btn btn-info btn-lg btn-block" tabindex="-1" role="button" aria-disabled="true" style="margin-bottom: 10px;">Delete / Update Students</a>
		</div>
	</div>
</body>
<script>
	function searchbar(){
		document.getElementById('containerdiv').innerHTML='<div class="jumbotron" style="margin-top:30px;"><h3 style="color:#008B8B; margin-bottom:20px;">Search the student:</h3><input id="search" class="form-control" type="text" placeholder="Search" aria-label="Search" style="width:800px; margin:auto;"></div><div id="display" class="row"></div>';

		function fill(Value) {
	   		$('#search').val(Value);
	   		$('#display').hide();
		}

		$(document).ready(function() {
	   		$("#search").keyup(function() {
	       		var title = $('#search').val();
		       if (title == "") {
		           $("#display").html("");
		       }
		       else {

		           $.ajax({
		               type: "POST",
		               url: "view.php",
		               data: {
		                   search: title
		               },
		               success: function(html) {
		                   $("#display").html(html).show();
		               }
		           });
		 
		       }
	 
	   		});
	 
		});
	}
	
</script>
</html>