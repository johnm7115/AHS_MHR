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
    </ul>
</div>

<div class = "row">
    
</div>
<?php
include_once 'footer.php';
?>