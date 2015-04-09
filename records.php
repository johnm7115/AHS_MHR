<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Full Medical History";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./patients.php">Patients</a></li>
        <li><a href="./patients.show.php">View</a></li>
        <li><a href="./records.php">Records</a></li>
    </ul>
</div>

<div class="row">
    <h2>Medical history for ___</h2>
</div>
<?php
include_once 'footer.php';
?>