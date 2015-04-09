<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Find Patient";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./patients.php">Patients</a></li>
    </ul>
</div>

<div class="row">
    <p class="col-md-6">
        Search for a Patient
        <input class="form-control" value="Simon Kim">
        <a class="btn btn-primary" href="./patients.show.php">Search</a>
    </p>
</div>
<?php
include_once 'footer.php';
?>