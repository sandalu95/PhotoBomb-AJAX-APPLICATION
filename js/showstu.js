function showstudent(str){
	if (str == "") {
        document.getElementById("display").innerHTML = "";
		return;
    } 
    else { 
    	document.getElementById("btndisplay").innerHTML = "<button class='btn btn-lg' style='border:1.5px solid black; ' id='deletebtn'>Delete</button>";  
	    if (window.XMLHttpRequest) {
	        xmlhttp = new XMLHttpRequest();
	    } else {
	       	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	    }
	    xmlhttp.onreadystatechange = function() {
	    	if (this.readyState == 4 && this.status == 200) {
	               document.getElementById("display").innerHTML = this.responseText;
	        }
	    };
	    xmlhttp.open("GET","dbconnect/getstu.php?q="+str,true);
	    xmlhttp.send();
        $(document).ready(function(){
			$('#deletebtn').click(function(event){
				alert('moon');
				event.preventDefault();
				var pname = $('#inputState').val();
				alert(pname);
					$.ajax({
						url:"dbconnect/delete.php",
						type:"post",
						data:{
							search:pname
						},
						success: function(html) {
					           $("#display").html(html).show();
					       }
					});
			});
		});
    }
}