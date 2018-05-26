
function showname(){
	var name;
 	name=document.getElementById('imagefield');
	return name.files.item(0).name;
}

$(document).ready(function(){
	$('#formsubmit').click(function(){
		
		$.post("submit.php",
			{pname:$('#titlefield').val(),profile:$('#descfield').val(),admissiondate:$('#datefield').val(),img:showname()},
			function(data){
				$('#response').html(data);
			}
			// {title:$('#titlefield').val(),descrip:$('#descfield').val(),cdate:$('#datefield').val(),img:$('#imagefield').val()},
			// function(data){
			// 	$('#response').html(data);
			// }
		);
	});
});
