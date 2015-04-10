<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Create Appointment";
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
				<h2><i class="glyphicon glyphicon-check"></i> Create Appointment</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
					<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					<a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
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
    	</div>
    </div>	
</div>

<?php
include_once 'footer.php';
?>