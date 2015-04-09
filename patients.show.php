<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Patients";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./patients.php">Patients</a></li>
        <li><a href="./patients.show.php">View</a></li>
    </ul>
</div>
<div class="row">
    <div class="box">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Patient Info</h2>
<?php if($_SESSION["userType"] == "professional") { ?>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content" style="display: none;">
<?php } else { ?>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
<?php } ?>
                <p class="text-right">
                    <a class="btn btn-info" href="patients.edit.php"><i class="glyphicon glyphicon-edit icon-white"></i>Edit</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>