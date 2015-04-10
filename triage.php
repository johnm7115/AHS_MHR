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
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-eye-open"></i> Triage Observation for:</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">



    <div class="row">
    	<p class="col-md-4">
            <select data-rel="chosen">
                <option>Select a wait-listed patient</option> 
                <option>John Mark Green</option>
                 <option>Simon Joseph Kim</option>
                 <option>Beatrice Rose</option>
        	</select>
        	</br></br>or add a new patient </br></br>
        	<input type="text">
        	<input class="btn btn-primary" type="submit" value="Enter">
		</p>
	</div>
        <hr>
        <h4><b><u>Waiting List</u></b> (Drag to reorder)</h4>
    	<ul>
        	<li draggable="true" ondragenter="dragenter(event)" ondragstart="dragstart(event)"><b>SIMON KIM</b> - <i>Back ache</i> <br> <a href="" class="glyphicon glyphicon-remove"></a> DELETE</li>
        	<li draggable="true" ondragenter="dragenter(event)" ondragstart="dragstart(event)"><b>BEATRICE ROSE</b> - <i>Sprained ankle</i> <br> <a href="" class="glyphicon glyphicon-remove"></a> DELETE</li>
        	<li draggable="true" ondragenter="dragenter(event)" ondragstart="dragstart(event)"><b>JOHN GREEN</b> - <i>Check up</i> <br> <a href="" class="glyphicon glyphicon-remove"></a> DELETE</li>
        	<li draggable="true" ondragenter="dragenter(event)" ondragstart="dragstart(event)"><b>TONI SANTOS</b> - <i>Concussion</i> <br> <a href="" class="glyphicon glyphicon-remove"></a> DELETE</li>
        	<li draggable="true" ondragenter="dragenter(event)" ondragstart="dragstart(event)"><b>ADRIAN LEE</b> - <i>Allergic Reaction</i> <br> <a href="" class="glyphicon glyphicon-remove"></a> DELETE</li>
		</ul>

</div>
</div>
</div>
</div>

<?php
include_once 'footer.php';
?>