<?php include 'database.php'; 

$keywords = "";
$output = "";

//secure homepage
if (!isset($_SESSION['username'])) {
  $_SESSION['warning'] = "You need log in to access this page!";

  //redirect user
  header("location: login.php");
}

if (isset($_POST['search'])) {

	$keywords = $_POST['keywords'];

	//perform
	$result = mysqli_query($con, "SELECT * FROM members WHERE CONCAT(first_name,last_name,batch,town) LIKE '%".$keywords."%'");

	if ($result->num_rows > 0) {
		while ($rows = $result->fetch_assoc()) {
			$first_name = $rows['first_name'];
			$last_name = $rows['last_name'];
			$gender = $rows['gender'];
			$date_of_birth = $rows['date_of_birth'];
			$batch = $rows['batch'];
			$town = $rows['town'];


			$output .= "$first_name	&emsp; $last_name &emsp; $gender &emsp; $date_of_birth &emsp; $batch &emsp; $town<br><br>";
		}
	}else{
		$output = "No result!";
	}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Member's Information</title>

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
<br><br>
<br><br>

<div class="well">
	<p><h2>Search</h2></p>
	<form action="search.php" method="POST">
	<div class="form-group col-md-6">
	<input type="text" name="keywords" placeholder= " Search for members.. " autocomplete="off">
	</div>
	<div>
		&nbsp;<input type="submit" name = "search" value="Search">
	</div>
</form>
</div>
<br><br>

<?php echo $output; ?>

</div>
</body>
</html>