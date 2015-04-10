<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Triage Observation";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./triage.php">Triage</a></li>
    </ul>
</div>

<div class="row">
    
</div>
<?php
include_once 'footer.php';
?>