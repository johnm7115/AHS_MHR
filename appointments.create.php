<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Create Appointment"
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
        <li><a href="./appointments.create.php">Create</a></li>
    </ul>
</div>

<div class = "row">
    
</div>
<?php
include_once 'footer.php';
?>