<?php

    $page_title = "Profile";
    $page_description = "Description of this page";

    include 'include/header.php';
    include 'include/navigation.php';
?>
<div class="container">
    <form action="php/updateUserProfile.php" role="form" method="post" class="form-horizontal">
        <h2 class="form-signin-heading">User Profile</h2>
        <hr>
        <div class="form-group">
            <div class="col-md-6">
                <label for="firstname" class="control-label">First Name</label>
                <input id="firstname" class="form-control" type="text" value="<?php echo $_SESSION['FirstName']; ?>">
            </div>
            <div class="col-md-6">
                <label for="lastname" class="control-label">Last Name</label>
                <input id="lastname" class="form-control" type="text" value="<?php echo $_SESSION['LastName'] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="control-label" for="studentNumber">Student Number</label>
                <input disabled id="studentNumber" class="form-control" type="text" value="<?php echo $_SESSION['StudentNumber']; ?>">
            </div>
            <div class="col-md-6">
                <label for="course" class="control-label">Course</label>
                <input id="course" type="text" class="form-control" value="<?php echo $_SESSION['Course'] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="control-label" for="email">E-Mail</label>
                <input id="email" class="form-control" type="text" value="<?php echo $_SESSION['E-Mail']; ?>">
            </div>
            <div class="col-md-6">
                <label for="role" class="control-label">Role</label>
                <input disabled id="role" type="text" class="form-control" value="<?php echo $_SESSION['Role'] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <input type="submit" value="Submit" class="btn btn-primary btn-block">
            </div>
        </div>
    </form>
</div>
<?php
    include 'include/footer.php';
?>


