<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Add Patient";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./patients.php">Patients</a></li>
        <li><a href="./patients.create.php">Add</a></li>
    </ul>
</div>
<div class="row">
    <form>
        <div class="row"><h4 class="col-md-4">PATIENT NAME </h4> </div><div class="row"><p class="col-md-4">
        First Name: <input type="text" class="form-control" name="firstname">
        Middle Name: <input type="text" class="form-control" name="middlename">
        Last Name: <input type="text" class="form-control" name="lastname">
        </p></div>
        <hr>
        <div class="row"><h4 class="col-md-4">PATIENT INFORMATION</h4></div><div class="row"><p class="col-md-4">
        Alberta Health Care Number: <input type="text" class="form-control" name="ahcid">
        Alberta Health Services ID: <input type="text" class="form-control" name="ahsid">
        Birth Date: <input type="date" class="form-control" name="birthdate">
        Address: <input type="text" class="form-control">
        Postal Code: <input type="text" class="form-control">
        Daytime Phone Number: <input type="tel" class="form-control">
        Evening Phone Number: <input type="tel" class="form-control">
        Email Address: <input type="text" class="form-control">
        </p></div>
        <hr>
        <div class="row"><h4 class="col-md-4">FAMILY PHYSICIAN NAME</h4></div><div class="row"><p class="col-md-4">
        First Name: <input type="text" class="form-control" name="firstname">
        <br>Middle Name: <input type="text" class="form-control" name="middlename">
        <br>Last Name: <input type="text" class="form-control" name="lastname"></p></div>
        <input class="btn btn-primary" type="submit" value="Add Patient">
    </form>
</div>
<?php
include_once 'footer.php';
?>