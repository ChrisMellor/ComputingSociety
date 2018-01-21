<?php

include 'base.php';

if (isset($_POST['regStudentNumber']))
{
	// removes backslashes
	$student_ID = stripslashes($_POST['regStudentNumber']);
	//escapes special characters in a string
	$student_ID = mysqli_real_escape_string($conn, $student_ID);
	$email = $student_ID . '@outlook.cardiffmet.ac.uk';
	$password = stripslashes($_POST['regPass']);
	$password = mysqli_real_escape_string($conn, $password);
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	$username = $student_ID;
	$sql = "INSERT INTO user (student_id, username, email, password, role, active) VALUES ('$student_ID','$username','$email','$hashed_password','Admin','active')";
	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
	if ($result)
	{

	}
}
else
{

}
?>