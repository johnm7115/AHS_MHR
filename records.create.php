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
    
</div>
<?php
include_once 'footer.php';
?>