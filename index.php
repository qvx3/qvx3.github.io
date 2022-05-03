<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Blog Krystiana</title>
  </head>
  <body style="background-color: seagreen">
    <h1>Blog Krystiana</h1>
	
	
	
	<div class="container">
	  <div class="row justify-content-md-center">
		
		<div class="col-4">
		
			<div class="card">
			
				<div class="card-body">
				
				<?php
				
				// Jesli nic nie przyszlo wraz z GET,
				// wyswietl
				if ( count($_GET) <= 0 ) {
				
				?>
				
			
			<!-- Pod zadnym pozorem nie uzywac form method  GET 
			bo taka przepisuje poufne dane do paska adresu -->
					<form action="" method="GET">
					  <div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Adres e-mail</label>
						<!-- Bardzo istotny atrybut name kazdego input 
						w celu analizy sieci poprzez narzedzia deweloperskie -->
						<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text">admin@test.pl 12345</div>
					  </div>
					  <div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Hasło</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1">
						
						
					  </div>
					  <div class="mb-3 form-check">
						
					  </div>
					  <button type="submit" class="btn btn-primary">Zaloguj</button>
					</form>

					
				<?php
				
				}
				else {
					
					if($_GET['email'] == 'admin@test.pl' && $_GET['password'] == '12345' ) {
				
				
				?>
				
				<div class="jumbotron">
				
					<h1>Witaj, <?=$_GET['email']?> </h1>
					
					<br>
					
					<a href="new_post.php">
						<button type="button" class="btn btn-primary">Nowy post</button>
					</a>
				
				</div>
				
				
				<?php
				
				}
					else {
						
						echo ("<h2>Błędne logowanie</h2>");
						
					
				?>
				
				<br>
				<br>
				

				<form>
					 <input type="button" class="btn btn-primary" value="Cofnij" onclick="history.back()">
				</form>
				
				
				<?php

						
					}
					
					

				}
				
				
				?>
				
				</div>
			</div>
		  
		</div>
		
	  </div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
