<!DOCTYPE html>
<html>
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="stylee.css">


   <title>Forme de validation </title>
  </head>
  <nav class="navbar  navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">RECCIPLANER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="acceuil.php">Accueil<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">planification<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="connecter.php">deconnecter<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  
  <body>
  <section class="bg">
  	<div class="container">
  		<div class="row d-flex justify-content-center">
  			<div class="col-md-4">
  				<div class="forme-wr">
  					<div class="forme-heading">
  						<h1>Log in </h1>
  						<p>Entrer vos informations </p>
  					</div>
  					<form name="regForm" id="regForm">
  						<div class="form-group">
  							<label>Name: </label>
  							<input type="text" class="form-control" id="name"name="" placeholder="Name">
  							<p id="p1"></p>
  						</div>
  						<div class="form-group">
  							<label>Email: </label>
  							<input type="email" class="form-control" id="email"name="" placeholder="Email">
  							<p id="p2"></p>
  						</div>
  						<div class="form-group">
  							<label>Password: </label>
  							<input type="password" class="form-control" id="password"name="" placeholder="Password">
  							<p id="p3"></p>
  						</div>
  						<div class="form-group">
  					
  							<input type="submit" class="btn btn-primary btn-block" id="submit">
  							
  						</div>
  						
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>

	
	

    <!--  JavaScript -->
    <!-- jQuery,  Popper.js,Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
  <script>
  	$(document).ready(function(){
  		$("#submit").click(function(){
  			var name = $("#name").val();
  			var email = $("#email").val();
  			var pass = $("#password").val();

  			if(name.length == "")
  			{
  				$("#p1").text("Please enter your name");
  				$("#name").focus();
  				return false;
  			}

  			else if(email.length == ""){
  				$("#p2").text("Please enter your email address");
  				$("#email").focus();
  				return false;
  			}


  			else if(pass.length == ""){
  				$("#p3").text("Please enter your password");
  				$("#password").focus();
  				return false;
  			}

  			else{
  				var con = confirm("Are you Done?");
  				if(con == true)
  				{
  					alert("Welcome to our Website");
  					return true;
  				}
  				else{
  					return false;
  				}
  			}
  		});
  	});


  </script>
  
  
  
  </body>
</html>