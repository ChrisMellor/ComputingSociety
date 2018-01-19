<?php

include 'base.php';

if (isset($_POST['AccountName'])) {
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);


    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);

    $hashed_password = password_verify($password, $rows['password']);
    if ($rows == 1) {
        $query = "SELECT * FROM user WHERE password='$hashed_password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);

        $_SESSION['username'] = $rows[$username];
        $_SESSION['role'] = $rows[$role];
    }
}
?>


