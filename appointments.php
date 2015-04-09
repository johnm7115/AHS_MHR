<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Appointments";
include_once 'header.php';

if($_SESSION["userType"] == "clerk")
{
    include "clerkMenu.php";
}
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./appointments.php">Appointments</a></li>
    </ul>
</div>

<div class = "row">
    
</div>
<?php
include_once 'footer.php';
?>