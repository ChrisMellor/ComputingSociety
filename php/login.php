<?php
include 'base.php';

if (isset($_POST['student_id']))
{
//escapes special characters in a string
	$student_id = mysqli_real_escape_string($conn, $username);
	$student_id = stripslashes($_POST['student_id']);
	$password = mysqli_real_escape_string($conn, $password);
	$password = stripslashes($_POST['password']);
	echo 'cry';


//    $query = "SELECT * FROM user WHERE student_id='$student_id'";
	$query = "SELECT * FROM user LEFT JOIN profile ON user.student_ID = profile.student_ID WHERE user.student_ID = '$student_id'";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if ($count == 1)
	{
		echo 'derp';
		if (password_verify($password, $row['password']))
		{
			$_SESSION['Student_ID'] = $row['student_id'];
			$_SESSION['E-Mail'] = $row['email'];
			$_SESSION['Role'] = $row['role'];
			$_SESSION['Active'] = $row['active'];
			$_SESSION['Course'] = $row['course'];
			$_SESSION['Avatar'] = $row['avatar'];
			$_SESSION['FirstName'] = $row['firstname'];
			$_SESSION['LastName'] = $row['lastname'];
			$_SESSION['Address_1'] = $row['address_1'];
			$_SESSION['Address_2'] = $row['address_2'];
			$_SESSION['City'] = $row['city'];
			$_SESSION['PostCode'] = $row['postcode'];
			$_SESSION['Country'] = $row['country'];
			$_SESSION['DOB'] = $row['dob'];
			$_SESSION['Join_Date'] = $row['join_date'];
			$_SESSION['Expiry_Date'] = $row['expiry_date'];


			header('Location: ../index.php');
		}
	}
}
?>