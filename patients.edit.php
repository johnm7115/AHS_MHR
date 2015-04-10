<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Edit Patient";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./patients.php">Patients</a></li>
        <li><a href="./patients.create.php">Edit</a></li>
    </ul>
</div>
<div class="row">
    <form>
        <div class="row"><h4 class="col-md-4">PATIENT NAME </h4></div>
        <div class="row"><p class="col-md-4">
                First Name: <input type="text" class="form-control" name="firstname" value="Simon">
                Middle Name: <input type="text" class="form-control" name="middlename" value="Joseph">
                Last Name: <input type="text" class="form-control" name="lastname" value="Kim">
            </p></div>
        <hr>
        <div class="row"><h4 class="col-md-4">PATIENT INFORMATION</h4></div>
        <div class="row"><p class="col-md-4">
                Alberta Health Care Number: <input type="text" class="form-control" name="ahcid" value="1234-56789">
                Alberta Health Services ID: <input type="text" class="form-control" name="ahsid" value="9876-54321">
                Birth Date: <input type="date" class="form-control" name="birthdate" value="1990-06-09">
                Address: <input type="text" class="form-control" value="123 Main St.">
                Postal Code: <input type="text" class="form-control" value="T2G 2B4">
                Daytime Phone Number: <input type="tel" class="form-control" value="403-210-7625">
                Evening Phone Number: <input type="tel" class="form-control" value="403-555-1234">
                Email Address: <input type="text" class="form-control" value="sjkim@null.com">
                Medical Information: <input type="text" class="form-control" value="allergic to peanuts, diabetic type B">
            </p></div>
        <hr>
        <div class="row"><h4 class="col-md-4">FAMILY PHYSICIAN NAME</h4></div>
        <div class="row"><p class="col-md-4">
                First Name: <input type="text" class="form-control" name="firstname" value="Karen">
                <br>Middle Name: <input type="text" class="form-control" name="middlename" value="Rose">
                <br>Last Name: <input type="text" class="form-control" name="lastname" value="Wang"></p></div>
        <input class="btn btn-primary" type="submit" value="Save Changes">
    </form>
</div>
<?php
include_once 'footer.php';
?>