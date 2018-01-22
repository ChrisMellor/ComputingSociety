<?php

$page_title = 'Admin Panel';
$panel_title = 'Delete';
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
			} ?>" role="presentation"><a href="view.php">View</a></li>
            <li class="<?php if ($panel_title == 'Register')
			{
				echo 'active';
			} ?>" role="presentation"><a href="create.php">Add</a></li>
            <li class="<?php if ($panel_title == 'Edit')
			{
				echo 'active';
			} ?>" role="presentation"><a href="edit.php">Edit</a></li>
            <li class="<?php if ($panel_title == 'Delete')
			{
				echo 'active';
			} ?>" role="presentation"><a href="delete.php">Delete</a></li>
        </ul>
    </div>
    <div class="col-md-12">
        <form name="delete" role="form" class="form-horizontal" action="php/deleteData.php" method="post">
            <div class="form-group">
                <div class="col-lg-6 col-lg-offset-3">
                    <h2 class="form-signin-heading">Choose a user to delete</h2>
                    <hr>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-lg-offset-3">
                    <label for="student_id" class="control-label">Username</label>
                    <input id="student_id" name="student_id" class="form-control" type="text" required>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-4">
                <input id="delete" type="submit" class="btn btn-primary btn-block" value="Delete User"/>
            </div>

        </form>
    </div>
</div>
<?php
include 'include/footer.php';
?>


