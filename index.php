<?php include 'database.php';

//secure homepage
if (!isset($_SESSION['username'])) {
  $_SESSION['warning'] = "You need log in to access this page!";

  //redirect user
  header("location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LAKAN THOUGHTS</title>

	<!--meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" type="image/png" href="https://lh3.googleusercontent.com/Jas1tt7s3zHlxKp1DBmL_cQI8QMsDr8eFA8SHfn-Q2kTnK0LdyF0O2yZnYhs06IwvbGbz7SnMV78ouQ=w1366-h638-rw" />


	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="custom1.css">

   <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Rufina" rel="stylesheet">
  </head>
  <body>

  	<!-- Menu bar -->
    <div class="container">
    	<nav class="navbar navbar-expand-md navbar-light fixed-top" id = "nav1">
		  <span class="h3" class="navbar-brand mb-0" id="tit1">LAKAN THOUGHTS</span>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php" onclick="refresh1()" id="tit1">| Home |<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
        <a class="nav-link" href="aboutus.php" id="tit1">| About Us |</a>
      </li>
      <li class="nav-item">
		        <a class="nav-link" href="members.php" id="tit1">| Member's Information |</a>
		      </li>
      <li class="nav-item">
		        <a class="nav-link" href="search.php" id="tit1">| Search |</a>
		      </li>
      <li class="nav-item">
		        <a class="nav-link" href="contactus.php" id="tit1">| Contact Us |</a>
		      </li>
		      <pre>			</pre>
      <li id="rcorners1">
      	<!-- Dashboard -->
  		<div class="well">
    		<?php if (isset($_SESSION['username'])) { ?>
      			Welcome, <strong><?php echo $_SESSION['username']; ?></strong>&nbsp;
      			<a href="server.php?logout=1" class="btn btn-warning">LOG OUT</a>
    		<?php } ?>
  		</div>
      </li>
		    </ul>
		  </div>
		</nav>
    </div>
<br><br><br>
    <!-- Alert for register -->
  <?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
      <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
      ?>
    </div>
  <?php } ?>


	<!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="rounded mx-auto d-block" src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.0-9/935861_611784092187009_482506721_n.jpg?oh=f386b7bbbf5db7808725a28d8f620483&oe=5A5C02D0" alt="First slide" id="img1">
	      <div class="carousel-caption d-none d-md-block">
		    
		    <p class="iba1">
		    <h3>UP LAKAN</h3>
		    In service of Bulakenyos
			</p><br><br>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img class="rounded mx-auto d-block" src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.0-9/549282_546101925421893_359776095_n.jpg?oh=8875aaef17e0b27b95d1a41a6dbeddd8&oe=5A5C6E58" alt="Second slide" id="img1">
	    </div>
	    <div class="carousel-item">
	      <img class="rounded mx-auto d-block" src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.0-9/18198988_1525844667447609_7573676630034983674_n.jpg?oh=389c3b479e297bb871d19be50cfeb492&oe=5A4C9F0B" alt="Third slide" id="img1">
	    </div>
	    <div class="carousel-item">
	      <img class="rounded mx-auto d-block" src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.0-9/16996239_1454695057895904_8771096763704914857_n.jpg?oh=a017e6a2526ebdb68cb2d9fd60f8fc05&oe=5A55B293" alt="Fourth slide" id="img1">
	    </div>
	    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
	</div>
	<hr class="iba2">
	<br><br>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src = "script.js" type="text/javascript"></script>

	</body>
</html>