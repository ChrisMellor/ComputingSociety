<?php

$page_title = 'Admin';
$panel_title = 'Edit';
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
            <li class="<?php if ($panel_title == 'View') echo 'active';?>" role="presentation"><a href="view.php">View</a></li>
            <li class="<?php if ($panel_title == 'Register') echo 'active';?>"role="presentation"><a href="create.php">Add</a></li>
            <li class="<?php if ($panel_title == 'Edit') echo 'active';?>"role="presentation"><a href="edit.php">Edit</a></li>
            <li class="<?php if ($panel_title == 'Delete') echo 'active';?>"role="presentation"><a href="delete.php">Delete</a></li>
        </ul>
    </div>
    <div class="col-md-12">

    </div>
</div>
<?php
include 'include/footer.php';
?>


