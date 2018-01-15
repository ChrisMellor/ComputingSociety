<?php

$page_title = "Admin Panel";
$page_description = "Description of this page";

include 'include/header.php';
include 'include/navigation.php';
?>

<div class="container">
    <div class="page-header">
        <h1>Admin Panel</h1>
        <hr>
    </div>
    <div class="col-md-3">
        <nav>
            <ul>
                <li><a href="<?php $adminOption = 'register' ?>"></a></li>
                <li>Poop</li>
                <li>Poop</li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9">
        <p>Content replaced here</p>

        <?php
        if ($adminOption == 'register') {
            include 'include/admin/register.php';
        }
        ?>
    </div>
</div>
<?php
include 'include/footer.php';
?>


