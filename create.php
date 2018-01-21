<?php

$page_title = 'Admin Panel';
$panel_title = 'Register';
$page_description = 'Description of this page';

include 'include/header.php';
include 'include/navigation.php';
?>

<div class="container">
    <div class="page-header">
        <h1>Admin Panel</h1>
        <hr>
    </div>

    <div class="col-md-12">
        <ul class="nav nav-tabs nav-justified">
            <li class="<?php if ($panel_title == 'View')
			{
				echo 'active';
			} ?>" role="presentation"><a
                        href="view.php">View</a></li>
            <li class="<?php if ($panel_title == 'Register')
			{
				echo 'active';
			} ?>" role="presentation"><a
                        href="create.php">Add</a></li>
            <li class="<?php if ($panel_title == 'Edit')
			{
				echo 'active';
			} ?>" role="presentation"><a
                        href="edit.php">Edit</a></li>
            <li class="<?php if ($panel_title == 'Delete')
			{
				echo 'active';
			} ?>" role="presentation"><a href="delete.php">Delete</a>
            </li>
        </ul>
    </div>

    <div class="col-md-12">
        <form action="php/register.php" class="form-horizontal" role="form" method="POST" name="register">
            <h3>Create an Account</h3>
            <hr>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="regFirstName" class="control-Label">First Name</label>
                    <input id="regFirstName" name="regFirstName" class="form-control" placeholder="Adam" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="regLastName" class="control-label">Last Name</label>
                    <input id="regLastName" name="regLastName" class="form-control" placeholder="Doe" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="regStudentNumber" class="control-label">Student Number</label>
                    <input id="regStudentNumber" name="regStudentNumber" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="regPass" class="control-Label">Password</label>
                    <input name="regPass" class="form-control" placeholder="Password" type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="regConfirmPass" class="control-Label">Repeat Password</label>
                    <input name="regConfirmPass" class="form-control" placeholder="Repeat Password"
                           type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="role" class="control-Label">Role</label>
                    <input name="role" class="form-control" placeholder="Repeat Password"
                           type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <input class="btn btn-primary btn-block" type="submit" value="Create account">
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include 'include/footer.php';
?>




