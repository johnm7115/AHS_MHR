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
    		<div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0">
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 3px; width: 138px; top: 44px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-title">Blood Test</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start" style="position: absolute; left: 861px; width: 144px; top: 44px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-title">Heart Surgery</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-end" style="position: absolute; left: 1px; width: 283px; top: 165px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-title">X-Ray Imaging</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 146px; width: 138px; top: 185px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">4p</span>
    					<span class="fc-event-title">Nurse Training</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 146px; width: 138px; top: 285px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">4p</span>
    					<span class="fc-event-title">Staff Meeting</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 575px; width: 138px; top: 165px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">10:30a</span>
    					<span class="fc-event-title">Dr. Harvey Appointment</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 575px; width: 138px; top: 185px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">12p</span>
    					<span class="fc-event-title">Luncheon of Neuroscientists</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 718px; width: 138px; top: 165px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">7a</span>
    					<span class="fc-event-title">Blood work</span>
    				</div>
    			</div>
    				<div class="fc-event-inner">
    					<span class="fc-event-title">Click for Google</span>
    				</div>
    		</div>
    		
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
