<!DOCTYPE html>
<html>


<head>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://cdn.rawgit.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/master/src/bootstrap3-wysihtml5.css">
	
	
	
	
	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js" defer></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" defer></script>
	
	<script src="https://cdn.rawgit.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/master/dist/bootstrap3-wysihtml5.all.min.js" defer></script>
	
	<script src="new_post.js" defer></script>
	
	
	
	
</head>


<body style="background-color: seagreen;">


<h1>Blog Krystiana</h1>

<div class="container">

<div class="row justify-content-md-center">
		
		<div class="col-10">
		
			<div class="card">
			
				<div class="card-body">
					
					<br>

					<h3>
						
						<?php
						echo date( $_GET['birthdaytime'] );
						?>
						
					</h3>

					<h2> <?=$_GET['title']?> </h2>

					<hr>
					
					<?=$_GET['content']?>

					
					<hr>
					
					<form>
						 <input type="button" value="Wróć do edycji" onclick="history.back()" class="btn btn-primary">
					</form>

			</div>
		</div>
	</div>
</div>
</div>

</body>




</html>












