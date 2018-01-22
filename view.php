<?php

$page_title = 'Admin Panel';
$panel_title = 'View';
$page_description = 'Description of this page';
include 'php/viewData.php';
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
            <div class="table-responsive">

                <table class="table table-hover table-bordered">
                    <caption>Member's accounts</caption>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>E-Mail</th>
                            <th>Student ID</th>
                            <th>Course</th>
                            <th>Join Date</th>
                            <th>Expiry Date</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php while ($row = mysqli_fetch_array($result_M)):;
							?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['student_id']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td><?php echo $row['join_date']; ?></td>
                                <td><?php echo $row['expiry_date']; ?></td>
                            </tr>
						<?php
						endwhile;
						?>
                    </tbody>
                </table>
                <table class="table table-hover table-bordered">
                    <caption>Admin's accounts</caption>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>E-Mail</th>
                            <th>Student ID</th>
                            <th>Course</th>
                            <th>Join Date</th>
                            <th>Expiry Date</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php while ($row = mysqli_fetch_array($result_A)):;
							?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['student_id']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td><?php echo $row['join_date']; ?></td>
                                <td><?php echo $row['expiry_date']; ?></td>
                            </tr>
						<?php
						endwhile;
						?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
include 'include/footer.php';
?>