<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "View Patient";
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
                <h2><i class="glyphicon glyphicon-info-sign"></i> Simon Kim's Info</h2>
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
                <p><b>Full Name:</b> Simon Joseph Kim</p>
                <p><b>Alberta Health Care Number:</b> 1234-56789</p>
                <p><b>Alberta Health Services ID:</b> 9876-54321</p>
                <p><b>Birth date:</b> June 9, 1990</p>
                <p><b>Address:</b> 123 Main St.</p>
                <p><b>Postal Code:</b>T2G 2B4</p>
                <p><b>Daytime Phone Number:</b> (403) 210 - 7625</p>
                <p><b>Evening Phone Number:</b> (403) 555 - 1234</p>
                <p><b>Email address:</b> sjkim@null.com</p>
                <p><b>Family Physician Name:</b> Dr. Sean Wang</p>
                <p class="text-right">
                    <a class="btn btn-info" href="patients.edit.php"><i class="glyphicon glyphicon-edit icon-white"></i>Edit</a>
                </p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Medical History</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <p class="text-right">
                    <a class="btn btn-info" href="records.php"><i class="glyphicon glyphicon-eye-open icon-white"></i> View full history</a>
                    <a href="records.create.php" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Create Record</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>