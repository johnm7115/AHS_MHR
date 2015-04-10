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
    <h2 class="col-md-12">Medical History for Simon Kim</h2>
    
    <h4 class="col-md-10"> <a href="">Pain in kidneys </a></h4>
    <h5 class="col-md-2">January 4, 2015 </h5>
    
    <h4 class="col-md-10"> <a href="">Abdominal pain and vomiting </a></h4>
    <h5 class="col-md-2">October 1, 2014  </h5>
    
    <h4 class="col-md-10"> <a href="">Pain in right ankle </a></h4>
    <h5 class="col-md-2">October 1, 2014  </h5>
   
    <h4 class="col-md-10"><a href="">High fever</a></h4>
    <h5 class="col-md-2">December 1, 2011</h5>
    
    <h4 class="col-md-10"><a href="">Broken left hand</a></h4>
    <h5 class="col-md-2">August 7, 2010</h5>

    
</div>
<?php
include_once 'footer.php';
?>