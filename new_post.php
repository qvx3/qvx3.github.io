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


<body style="background-color: lightgreen;">


<h1>Blog Krystiana</h1>

<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
	
	
      <form action="/action_page.php" method="get" role="form">
	  
	  
	  
		<div class="form-group">
        
			<input type="datetime-local" class="form-control" name="birthdaytime" />
		    
          </div>
        
	  
        <div class="form-group">
          <input type="text" class="form-control" name="title" placeholder="Tytuł wpisu" />
        </div>
		
		  
		  <br>
		  <br>
		
		
        
        <div class="form-group">
          <textarea class="form-control bcontent" name="content"></textarea>
        </div>
		
		
		  <br>
		  <br>
		  
		
        <div class="form-group">
          <input type="submit" name="Submit" value="Zatwierdź post" class="btn btn-primary form-control" />
        </div>
      </form>
    </div>
  </div>
</div> 



</body>




</html>












