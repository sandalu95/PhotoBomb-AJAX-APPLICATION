<!DOCTYPE html>
<html>
<head>
	<title>Photo Bomb</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
<script>
	function searchbar(){
		document.getElementById('containerdiv').innerHTML='<div class="jumbotron" style="margin-top:30px;"><h3 style="color:#008B8B; display:inline;">Search the student:</h3><button class="btn btn-outline-info" style="float:right; margin-left:10px;" onclick="viewall()">View All</button><a href="main.php" class="btn btn-outline-info" style="float:right;"><< Back</a><input id="search" class="form-control" type="text" placeholder="Search" aria-label="Search" style="width:800px; margin:auto; margin-top:30px;"></div><div id="display" class="row"></div>';

		function fill(Value) {
	   		$('#search').val(Value);
	   		$('#display').hide();
		}

		$(document).ready(function() {
	   		$("#search").keyup(function() {
	       		var pname = $('#search').val();
		       if (pname == "") {
		           $("#display").html("");
		       }
		       else {

		           $.ajax({
		               type: "POST",
		               url: "view.php",
		               data: {
		                   search: pname
		               },
		               success: function(html) {
		                   $("#display").html(html).show();
		               }
		           });
		 
		       }
	 
	   		});
	 
		});

		
	}
	function viewall(){
		var xhttp; 
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("display").innerHTML = this.responseText;
		}
		};
		xhttp.open("GET", "getall.php", true);
		xhttp.send();
	}
	
</script>
</html>