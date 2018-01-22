<?php
include 'base.php';

$student_id = $_POST['student_id'];

$queryMember = "DELETE FROM user WHERE student_id='$student_id'";
$resultMember = mysqli_query($conn, $queryMember) or die(mysqli_error($conn));

$queryAdmin = "DELETE FROM profile WHERE student_id='$student_id'";
$resultAdmin = mysqli_query($conn, $queryAdmin) or die(mysqli_error($conn));

header("Location: ../delete.php");
exit(0);

?>