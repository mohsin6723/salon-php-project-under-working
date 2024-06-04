<!DOCTYPE html>
<html>
<head>
	<title>Barber Shop Bootstrap Template Grafreez</title>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
<link rel="stylesheet" type="text/css" href="css/loaders.css"/>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/0950975a13.js" crossorigin="anonymous"></script>
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<body>


<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container-fluid">
		  <a class="navbar-brand" href="index.html"><strong>Grafreez</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><img src="img/icons/menu.png"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav m-auto text-sm-center text-md-center">
		      <li class="nav-item">
		        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#services">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#about">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#price">Prices</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#testimonial">Testimonials</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#contact">Booking Form</a>
		      </li>
		    </ul>

			<?php
			session_start();
		  if(isset($_SESSION['email'])){
		  $email=$_SESSION['email'];
		  ?>
		  <!-- login k baad ye chalay ga -->
		  <div class="nav-item dropdown">
					  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
						  <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['email'];?></span>
					  </a>
					  <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
						  <a href="#" class="dropdown-item">My Profile</a>
						  <a href="#" class="dropdown-item">Settings</a>
						  <form action="logout.php" method="POST">
							  <button type="submit" name="logout_submit">Log Out</button>
  
					  </form>
					  </div>

					  <?php
}
else{
	?>
			<form action="login.php" class="d-flex mx-4" role="search">
				<button class="btn btn-outline-warning" type="submit">login</button></form>
				<form action="signup.php" class="d-flex " role="search">
				  <button class="btn btn-outline-success" type="submit">Signup</button>
				</form>
		  </div>	
		  <?php
		
		   }
		   ?>
		 
	</div>
</nav>