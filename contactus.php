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
	<title>Contact Us</title>
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
<br><br><br><br>

<h1 id="cu">Contact Us</h1> <hr class="iba">
<br>
<h4 id= "cu">General Information</h4>
<p id="cu">
	UP LAKAN<br>
	Domicile Address: 3 Cluster D, Tambayan Complex, Vinzons Hill, University of the Philippines, Diliman, Quezon City
</p>

<br>
<img src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.0-9/14203213_1264567376908674_2806093332215720616_n.jpg?oh=4c04b35cecdb382389b4ba9c09a4c624&oe=5A557C46" id = "img2" alt="Recruitment">
<br><br><br>
<h4 id="cu">Social Media</h4>
	<div id="ok">
      	<a href="https://fb.com/uplakan" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-128.png" id="fb"></a>

      	<a href="https://twitter.com/UP_Lakan" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-128.png" id="tw"></a>
      </div>
      <br><br><br><br>
	<h4 id="cu">E-mail</h4>
	<p id="cu">
		General:<br> &nbsp;&nbsp;&nbsp;&nbsp; uplakan@gmail.com<br>
		Marketing:<br> &nbsp;&nbsp;&nbsp;&nbsp;uplakan.marketing@gmail.com<br>
		PAMBATANG BUKLATAN:<br> &nbsp;&nbsp;&nbsp;&nbsp;uplakan.pambatangbuklatan@gmail.com<nr>
	</p>

	<form action="mailto:uplakan@gmail.com" method="post" enctype="text/plain" id="cu">
	Name:<br>
	<input type="text" name="name"><br>
	E-mail:<br>
	<input type="text" name="mail"><br>
	Comment:<br>
	<input type="text" name="comment" size="50"><br><br>
	<input type="submit" value="Send">
	<input type="reset" value="Reset">
	</form>

	<br><br><br>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src = "script.js" type="text/javascript"></script>

</body>
</html>