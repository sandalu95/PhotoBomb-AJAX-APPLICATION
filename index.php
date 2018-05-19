<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<div class="wrapper row">
	<!-- <div class="col-md-3"> -->
		<div class="col-md-3" style="border-right: 1px solid #008B8B; padding-top: 150px; padding-left: 30px; padding-right: 30px; height: 100vh;">
			<div>
				<label for="titlefield">Title</label>
				<input type="text" class="form-control" id="titlefield">
			</div>
			<div>
				<label for="descfield">Description</label>
				<input type="text" class="form-control" id="descfield">
			</div>
			<div>
				<label for="datefield">Date Captured</label>
				<input type="date" class="form-control" id="datefield" min="2010-12-31">
			</div>
			<div style="margin-bottom: 40px;">
				<label for="imagefield">Image</label>
				<input type="file" id="imagefield" name="imagefield" multiple onchange="showname()" accept="image/x-png,image/gif,image/jpeg">
			</div>
			<button id="formsubmit" class="btn btn-info" style="width: 200px; margin-left: 20px;">Add Image</button>
		</div>
	<!-- </div> -->

	<div class="col-md-9" style="float: right; padding-left: 0;">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		<!-- Team -->
		<section id="team" class="pb-5">
		    <div class="container">
		        <h5 class="section-title h1">OUR TEAM</h5>
		        <div class="row" id="response" >
		            <!-- Team member -->
		            
		            <!-- ./Team member -->

		        </div>
		    </div>
		</section>
		<!-- Team -->
	</div>

</div>