<?php

$page_title = "Login";
$page_description = "Description of this page";

include 'include/header.php';
include 'include/navigation.php';
?>

<div class="container">
    <form name="login" role="form" class="form-horizontal" action="php/login.php" method="post">
        <div class="form-group">
            <div class="col-lg-6 col-lg-offset-3">
                <h2 class="form-signin-heading">Login to CompSoc!</h2>
                <hr>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-lg-offset-3">
                <label for="student_id" class="control-label">Username</label>
                <input id="student_id" name="student_id" class="form-control" type="text" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-lg-offset-3">
                <label for="password" class="control-label">Password</label>
                <input id="password" class="form-control" name="password" type="password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-lg-offset-3">
                <input id="login" type="submit" class="btn btn-primary btn-block" value="Sign In"/>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-6 col-lg-offset-3">
                <hr>
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </form>
</div>

<?php
include 'include/footer.php';
?>
