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
		               url: "dbconnect/view.php",
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
		xhttp.open("GET", "dbconnect/getall.php", true);
		xhttp.send();
	}