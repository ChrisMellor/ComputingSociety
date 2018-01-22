<?php

include "base.php";

$query_M = "SELECT * FROM profile RIGHT JOIN user ON profile.student_ID = user.student_ID Where role = 'Member'";
$result_M = mysqli_query($conn, $query_M) or die(mysqli_error($conn));

$query_A = "SELECT * FROM profile RIGHT JOIN user ON profile.student_ID = user.student_ID Where role = 'Admin'";
$result_A = mysqli_query($conn, $query_A) or die(mysqli_error($conn));

?>