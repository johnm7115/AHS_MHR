<?php
include_once 'header.php';

include "clerkMenu.php";
?>
<div><ul class="breadcrumb"><li><a href="./home.php">Home</a></li></ul></div>

<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-calendar"></i> Calendar of Appointments</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
					<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					<a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div id="calendar" class="fc fc-ltr">
    <div class="fc-content" style="">
    	<div class="fc-view fc-view-month fc-grid" unselectable="on">
    		
    	</div>
    </div>
</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>



<?php
include_once './footer.php';
?>
