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
    <table class="fc-header" style="width:100%">
        <tbody>
        <tr>
        	<td class="fc-header-left">
        		<span class="fc-button fc-button-prev fc-state-default fc-corner-left" unselectable="on">
        			<span class="fc-icon fc-icon-left-single-arrow"></span>
        		</span>
        		<span class="fc-button fc-button-next fc-state-default fc-corner-right" unselectable="on">
        			<span class="fc-icon fc-icon-right-single-arrow"></span>
        		</span>
        		<span class="fc-header-space"></span>
        		<span class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right" unselectable="on">today</span>
        	</td>
        	<td class="fc-header-center">
        		<span class="fc-header-title"><h2>April 2015</h2></span>
        	</td>
        	<td class="fc-header-right">
        		<span class="fc-button fc-button-month fc-state-default fc-corner-left fc-state-active" unselectable="on">month</span>
        		<span class="fc-button fc-button-agendaWeek fc-state-default" unselectable="on">week</span>
        		<span class="fc-button fc-button-agendaDay fc-state-default fc-corner-right" unselectable="on">day</span>
        	</td>
        </tr>
    	</tbody>
    </table>
    <div class="fc-content" style="">
    	<div class="fc-view fc-view-month fc-grid" unselectable="on">
    		<div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0">
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 3px; width: 138px; top: 44px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-title">All Day Event</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start" style="position: absolute; left: 861px; width: 144px; top: 44px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-title">Long Event</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-end" style="position: absolute; left: 1px; width: 283px; top: 165px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-title">Long Event</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 146px; width: 138px; top: 185px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">4p</span>
    					<span class="fc-event-title">Repeating Event</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 146px; width: 138px; top: 285px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">4p</span>
    					<span class="fc-event-title">Repeating Event</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 575px; width: 138px; top: 165px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">10:30a</span>
    					<span class="fc-event-title">Meeting</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 575px; width: 138px; top: 185px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">12p</span>
    					<span class="fc-event-title">Lunch</span>
    				</div>
    			</div>
    			<div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 718px; width: 138px; top: 165px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-time">7a</span>
    					<span class="fc-event-title">Birthday Party</span>
    				</div>
    			</div>
    			<a href="http://google.com/" class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; left: 861px; width: 142px; top: 405px;">
    				<div class="fc-event-inner">
    					<span class="fc-event-title">Click for Google</span>
    				</div>
    			</a>
    		</div>
    		<table class="fc-border-separate" style="width:100%" cellspacing="0">
    			<thead>
    				<tr class="fc-first fc-last">
    					<th class="fc-day-header fc-sun fc-widget-header fc-first" style="width: 143px;">Sun</th>
    					<th class="fc-day-header fc-mon fc-widget-header" style="width: 143px;">Mon</th>
    					<th class="fc-day-header fc-tue fc-widget-header" style="width: 143px;">Tue</th>
    					<th class="fc-day-header fc-wed fc-widget-header" style="width: 143px;">Wed</th>
    					<th class="fc-day-header fc-thu fc-widget-header" style="width: 143px;">Thu</th>
    					<th class="fc-day-header fc-fri fc-widget-header" style="width: 143px;">Fri</th>
    					<th class="fc-day-header fc-sat fc-widget-header fc-last">Sat</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr class="fc-week fc-first">
    					<td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2014-06-01">
    						<div style="min-height: 120px;">
    							<div class="fc-day-number">1</div>
    							<div class="fc-day-content">
    								<div style="position: relative; height: 20px;">&nbsp;</div>
    							</div>
    						</div>
    					</td>
    					<td class="fc-day fc-mon fc-widget-content fc-past" data-date="2014-06-02">
    						<div>
    							<div class="fc-day-number">2</div>
    							<div class="fc-day-content">
    								<div style="position: relative; height: 20px;">&nbsp;</div>
    							</div>
    						</div>
    					</td>
    					<td class="fc-day fc-tue fc-widget-content fc-past" data-date="2014-06-03">
    						<div>
    							<div class="fc-day-number">3</div>
    							<div class="fc-day-content">
    								<div style="position: relative; height: 20px;">&nbsp;</div>
    							</div>
    						</div>
    					</td>
    					<td class="fc-day fc-wed fc-widget-content fc-past" data-date="2014-06-04">
    						<div>
    							<div class="fc-day-number">4</div>
    							<div class="fc-day-content">
    								<div style="position: relative; height: 20px;">&nbsp;</div>
    							</div>
    						</div>
    					</td>
    					<td class="fc-day fc-thu fc-widget-content fc-past" data-date="2014-06-05">
    						<div>
    							<div class="fc-day-number">5</div>
    							<div class="fc-day-content">
    								<div style="position: relative; height: 20px;">&nbsp;</div>
    							</div>
    						</div>
    					</td>
    					<td class="fc-day fc-fri fc-widget-content fc-past" data-date="2014-06-06"><div><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2014-06-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2014-06-08"><div style="min-height: 119px;"><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2014-06-09"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2014-06-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2014-06-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2014-06-12"><div><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2014-06-13"><div><div class="fc-day-number">13</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2014-06-14"><div><div class="fc-day-number">14</div><div class="fc-day-content"><div style="position: relative; height: 40px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2014-06-15"><div style="min-height: 119px;"><div class="fc-day-number">15</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2014-06-16"><div><div class="fc-day-number">16</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2014-06-17"><div><div class="fc-day-number">17</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2014-06-18"><div><div class="fc-day-number">18</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2014-06-19"><div><div class="fc-day-number">19</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2014-06-20"><div><div class="fc-day-number">20</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2014-06-21"><div><div class="fc-day-number">21</div><div class="fc-day-content"><div style="position: relative; height: 20px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2014-06-22"><div style="min-height: 119px;"><div class="fc-day-number">22</div><div class="fc-day-content"><div style="position: relative; height: 54px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2014-06-23"><div><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position: relative; height: 54px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2014-06-24"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position: relative; height: 54px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2014-06-25"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position: relative; height: 54px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2014-06-26"><div><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 54px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2014-06-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 54px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2014-06-28"><div><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 54px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2014-06-29"><div style="min-height: 119px;"><div class="fc-day-number">29</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2014-06-30"><div><div class="fc-day-number">30</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-past" data-date="2014-07-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-past" data-date="2014-07-02"><div><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-past" data-date="2014-07-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-past" data-date="2014-07-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-past fc-last" data-date="2014-07-05"><div><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week fc-last"><td class="fc-day fc-sun fc-widget-content fc-other-month fc-past fc-first" data-date="2014-07-06"><div style="min-height: 121px;"><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-other-month fc-past" data-date="2014-07-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-past" data-date="2014-07-08"><div><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-past" data-date="2014-07-09"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-past" data-date="2014-07-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-past" data-date="2014-07-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-past fc-last" data-date="2014-07-12"><div><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr></tbody></table></div></div></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>



<?php
include_once './footer.php';
?>
