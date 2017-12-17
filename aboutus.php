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
	<title>About Us</title>
	<!--meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" type="image/png" href="https://lh3.googleusercontent.com/Jas1tt7s3zHlxKp1DBmL_cQI8QMsDr8eFA8SHfn-Q2kTnK0LdyF0O2yZnYhs06IwvbGbz7SnMV78ouQ=w1366-h638-rw" />


	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="custom1.css">

    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rufina" rel="stylesheet">
</head>
<body id="body1">
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
<br><br>
	<a id="vm"></a>
	<div id="cu">
		<h4>Vision & Mission</h4>
		<hr class="iba3">
		<p>
			Vision<br>
			• We believe that through our organization, solidarity and success of Bulacan in different aspects will be achieved.<br><br>

			Mission<br>
			• Help Bulakenyos inside and outside the University of the Philippines.<br>

• Achieved through our efforts such as our projects and the continuous cooperation and collaboration with other groups, organizations, and sectors<br>&nbsp;&nbsp;&nbsp;inside and outside UP.<br>

• Help UP students who hail in Bulacan in their academics and create friendship and unity among them.<br>

• Spread the culture and tradition of Bulacan both inside and outside UP.<br><br>
		</p>
	</div>
	<div id="cu">
		<a id="mems"><h4>Members</h4></a>
		<hr class="iba3">
		<div>
			<h5>Executive Committee A.Y. 2017-2018</h5>
			<br>
			<img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.0-9/23844961_1745930675439006_736211532052793095_n.jpg?oh=f5e556bdb1b5a2049da54a84f1a9edf9&oe=5A903F22" id="exepic" alt="Executive Pic">
			<table>
				<tr>
					<th>
						Franz Marius R. Carangan<br>
						Chairperson
						<br>
					</th>
					<th>
						Roberto L. Castro, Jr.<br>
						Vice Chairperson for<br> Internal Affairs
						<br>
					</th>
					<th>
						Dustin Matthew O. Estrellado<br>
						Vice Chairperson for<br> External Affairs<br>
					</th>
					<th>
						Psalm Lemuel D.O. Guevarra<br>
						Secretary
					</th>
				</tr>
				<tr>
					<th>
						Christian Louie M. Caluag<br>
						Treasurer
					</th>
					<th>
						Jaycen S. Aligway<br>
						Publicity Committee Head
					</th>
					<th>
						Jeanne Paula P. Alfonso<br>
						Special Events and Culture <br>Committee Head
					</th>
					<th>
						Robert Gerean C. Santos<br>
						Academic Affairs <br>Committee Head
					</th>
				</tr>
			</table>
		</div><br><br>
	</div>
	<div id = "cu">
		<a id="aff"><h4>Affiliations</h4></a>
		<hr class="iba3">
		<p>
		• National Youth Commission (NYC)<br>
		• UP Sanlahi Alliance<br><br>
		</p>
	</div>
	<div id="cu">
		<a id="aw"><h4>Awards</h4></a>
		<hr class="iba3">
		<p>
		• Gintong Kabataan Awards for Public Service 2009<br>
			• by the Provincial Government of Bulacan<br><br>

		• Oblation Run Awards for Service 2015<br>
			• 2nd Runner-up Organization by Alpha Phi Omega Fraternity<br><br>

		• Search for Outstanding Volunteers 2016<br>
			• National Volunteer Awardee by Philippine National Voluntees Service Coordinating Agency<br><br>
		</p>
	</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src = "script.js" type="text/javascript"></script>

</body>
</html>