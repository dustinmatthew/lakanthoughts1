<?php include 'database.php'; 

//secure homepage
if (!isset($_SESSION['username'])) {
  $_SESSION['warning'] = "You need log in to access this page!";

  //redirect user
  header("location: login.php");
}


//check if button is clicked
if (isset($_GET['edit'])) {
  # code...
  $id = $_GET['edit']; //assign edit value

  //prepare query
  $query = "SELECT * FROM members WHERE id = $id";

  //perfrom query
  $edit_record = mysqli_query($con,$query);

  //convert record into an array
  $edit_array = mysqli_fetch_array($edit_record);

  //assign values
  $first_name = $edit_array['first_name'];
  $last_name = $edit_array['last_name'];
  $gender = $edit_array['gender'];
  $date_of_birth = $edit_array['date_of_birth'];
  $town = $edit_array['town'];
  $batch = $edit_array['batch'];

  //Set edit state to true
  $edit_state = true;

$alert_script;
$error;

//prompt user for delete
if ($_POST['confirm'] !== 1) {
  $alert_script =  "<script>alert(\'You have to tick the box\')</script>";
  $error = true;
} else {
  $error = false;
}
if (!$error) {
  //complete the action code/call another file.
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
<br><br>
<br><br>
<div class="container">

<!-- Alert for record save -->
  <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-success">
      <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
      ?>
    </div>
  <?php } ?>

  <!-- Form -->
  <div class="well">
    <h2 class="text-center h_title"><p class="p_title">Add Member's Information<p></h2>
      <form method="POST" action="database.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="John" value = "<?php echo $first_name; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Doe" value = "<?php echo $last_name; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="batch">Batch Name</label>
            <input type="text" class="form-control" name="batch" placeholder="UNANG SIBOL" value = "<?php echo $batch; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="town">Town</label>
            <input type="text" class="form-control" name="town" placeholder="Obando" value = "<?php echo $town; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender" required>
              <option <?php !isset($gender) ? 'selected' : null ?>>Choose...</option>
              <option value="M" <?php echo $gender == 'M' ? 'selected' : null; ?>>Male</option>
              <option value="F" <?php echo $gender == 'F' ? 'selected' : null; ?>>Female</option>
              <option value="U" <?php echo $gender == 'U' ? 'selected' : null; ?>>Undisclosed</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" value = "<?php echo date_format(date_create($date_of_birth),"Y-m-d"); ?>" required>
          </div>
          
        </div>
        <?php if($edit_state) { ?>
            <button type="submit" class="btn btn-primary" name="update" id="s1">Update</button>
            <a class="btn btn-warning" name = "edit" href="index.php">Cancel</a>
        <?php } else { ?>
            <button type="submit" class="btn btn-primary" name="submit" id="s1">Submit</button>
        <?php } ?>
        
      </form>
  </div>
  <!-- End of Form -->
<br><br>

<br><br>
<br><br>
  <!-- Display of Data in a Table Format -->
  <div class="well">
    <p><h2>View Information</h2></p>
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Gender</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Batch Name</th>
          <th scope="col">Town</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0;
        while ($row = mysqli_fetch_array($records)) {?>
          <tr>
          <td> <?php echo ++$i; ?> </td>
          <td> <?php echo $row['first_name'].' '.$row['last_name']; ?> </td>
          <td> <?php echo $row['gender']; ?> </td>
          <td> <?php echo $row['date_of_birth']; ?> </td>
          <td> <?php echo $row['batch']; ?> </td>
          <td> <?php echo $row['town']; ?> </td>
          <td><a class="btn btn-warning" name = "edit" href="members.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Edit</a>
              <a class="btn btn-danger" href="members.php?del=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
        <?php } ?>
    
      </tbody>
    </table>
  </div>
    <!-- End of Display of Data in a Table Format -->
    
</div>
</body>
</html>