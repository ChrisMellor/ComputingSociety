<?php
    session_start();
    header('refresh:3;url=../index.php');
    echo nl2br("Goodbye, you are being logged out. \n Returning to the main page.");
    session_destroy();
    exit();

?>