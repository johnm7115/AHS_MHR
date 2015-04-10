<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Create Record";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./patients.php">Patients</a></li>
        <li><a href="./patients.show.php">View</a></li>
        <li><a href="./records.php">Records</a></li>
        <li><a href="./records.create.php">Create</a></li>
    </ul>
</div>

<div class="row">
    <form enctype="multipart/form-data">
        <h3 class="col-md-12">Add record for <b>Simon Joseph Kim</b></h3>
        <div class="col-md-5">
        <p>Summary: <input class="form-control" type="text"></p>
        <p>Description: <textarea class="form-control"></textarea></p>
        <hr>
        <h4>Attachments</h4>
        <input type="file" multiple><br />
        <input class="btn btn-primary" type="submit" value="Save Record">
        </div>
    </form>
</div>
<?php
include_once 'footer.php';
?>