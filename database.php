<?php
	session_start();

	//Initialization of Variables
	$first_name = "";
	$last_name = "";
	$gender = "";
	$date_of_birth = "";
	$town = "";
	$batch = "";
	$id = 0;
	$edit_state = false;

	//Connecting to Database
	$con = mysqli_connect("localhost", "root", "", "lis161_dynamic");

	//You gotta check the connection
	if (!$con) {
		# code...
		echo "Connecting database not successful.";
	}

	//CREATE record
	if (isset($_POST['submit'])) {
		# code...
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$date_of_birth = $_POST['date_of_birth'];
		$town = $_POST['town'];
		$batch = $_POST['batch'];

		$query = "INSERT INTO members(first_name,last_name,gender,date_of_birth,town,batch) VALUE ('$first_name', '$last_name', '$gender','$date_of_birth', '$town', '$batch')";

		mysqli_query($con, $query);
		$_SESSION['message'] = "Record saved.";
		header("location: members.php");

	}

	//READ records
	$records = mysqli_query($con,"SELECT * FROM members");

	//UPDATE records
	if (isset($_POST['update'])) {
		# code...
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$date_of_birth = $_POST['date_of_birth'];
		$town = $_POST['town'];
		$batch = $_POST['batch'];
		$id = $_POST['id'];
		//$course_key = $_POST['course_key'];

		//prepare query
		$query = "UPDATE members SET 
		first_name = '$first_name',
		last_name = '$last_name',
		gender = '$gender',
		date_of_birth = '$date_of_birth',
		town = '$town',
		batch = '$batch'
		WHERE id = '$id'";

		//perform query
		mysqli_query($con, $query);

		//set status message
		$_SESSION['message'] = "Record saved.";

		//redirect to homepage
		header("location: members.php");

	}

	//delete record

	if (isset($_GET['del'])) {
		# code...
		$id = $_GET['del'];

		//prepare query
		$query = "DELETE FROM members WHERE id = '$id'";

		//perform query
		mysqli_query($con, $query);

		//set status message
		$_SESSION['message'] = "Record Deleted.";

		//redirect to homepage
		header("location: members.php");
	}

?>