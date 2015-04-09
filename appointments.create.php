<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Create Appointment";
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
     <form>
        <div class="row"><h4 class="col-md-8">PATIENT</h4> </div><div class="row"><p class="col-md-4">
                <select data-rel="chosen">
                    <option></option> 
                    <option>John Mark Green</option>
                     <option>Simon Joseph Kim</option>
                     <option>Beatrice Rose</option>
                </select>
            </p></div>
        <hr>
        <div class="row"><h4 class="col-md-6">APPOINTMENT INFORMATION</h4></div><div class="row"><p class="col-md-4">
        Date: <input type="date" class="form-control">
        Time: <input type="time" class="form-control">
        Location: <input type="text" class="form-control">
        Reason for Appointment: <input type="text" class="form-control">
        </p></div>
        <input class="btn btn-primary" type="submit" value="Create Appointment">
    </form>
</div>

<?php
include_once 'footer.php';
?>