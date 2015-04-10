<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "View Appointment";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./appointments.php">Appointments</a></li>
        <li><a href="./appointments.create.php">Create</a></li>
    </ul>
</div>


<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-edit"></i> View Appointment</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
					<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					<a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
     <form>
        		<p><b>Full Name:</b> Simon Joseph Kim</p>
                <p><b>Alberta Health Care Number:</b> 1234-56789</p>
                <p><b>Alberta Health Services ID:</b> 9876-54321</p>
                <p><b>Daytime Phone Number:</b> 403-210-7625</p>
                <p><b>Evening Phone Number:</b> 403-555-1234</p>
                <p><b>Email address:</b> sjkim@null.com</p>
                <p><b>Family Physician Name:</b> Dr. Karen Rose Wang</p>
        <hr>
        <div class="row"><h4 class="col-md-6">APPOINTMENT INFORMATION</h4></div><div class="row"><p class="col-md-4">
        <b>Date: </b>2015/04/14</br>
        <b>Time: </b>12PM</br>
        <b>Location: </b>Scanning room</br>
        <b>Reason for Appointment: </b>MRI scan</br>
        </p></div>
    </form>
    		</div>
    	</div>
    </div>	
</div>

<?php
include_once 'footer.php';
?>