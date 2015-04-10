<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
$pageTitle = "Appointments";
include_once 'header.php';

include_once 'menu.php';
?>
<div>
    <ul class="breadcrumb">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./appointments.php">Appointments</a></li>
    </ul>
</div>

<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-calendar"></i> All Appointments</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
					<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					<a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="box-content">
					<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
						
						<table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
							<thead>
								<tr role="row">
									<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 197px;">AHS ID</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 166px;">Date Scheduled</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 90px;">Time</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 93px;">Status</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 369px;">Actions</th>
								</tr>
							</thead>

							<tbody role="alert" aria-live="polite" aria-relevant="all">
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/13</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/04/13</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">254685912</td>
									<td class="center ">2015/04/14</td>
									<td class="center ">12PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">53642398</td>
									<td class="center ">2015/04/14</td>
									<td class="center ">1PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/15</td>
									<td class="center ">10AM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/04/15</td>
									<td class="center ">11AM</td>
									<td class="center ">
										<span class="label-default label label-default">Scheduled</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/15</td>
									<td class="center ">12PM</td>
									<td class="center ">
										<span class="label-default label label-default">Scheduled</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/04/16</td>
									<td class="center ">2PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="./appointments.show.php">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
								<tr class="odd">
									<td class="  sorting_1">473685912</td>
									<td class="center ">2015/04/21</td>
									<td class="center ">4PM</td>
									<td class="center ">
										<span class="label-default label label-success">Confirmed</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
										<a class="btn btn-info" href="./appointments.edit.php">
											<i class="glyphicon glyphicon-edit icon-white"></i>Edit
										</a>
										<a class="btn btn-danger" href="#">
											<i class="glyphicon glyphicon-trash icon-white"></i>Delete
										</a>
									</td>
								</tr>
								<tr class="even">
									<td class="  sorting_1">94875398</td>
									<td class="center ">2015/05/12</td>
									<td class="center ">4:30PM</td>
									<td class="center ">
										<span class="label-warning label label-default">Pending</span>
									</td>
									<td class="center ">
										<a class="btn btn-success" href="./appointments.show.php">
											<i class="glyphicon glyphicon-zoom-in icon-white"></i>View
										</a>
									<a class="btn btn-info" href="./appointments.edit.php">
										<i class="glyphicon glyphicon-edit icon-white"></i>Edit
									</a>
									<a class="btn btn-danger" href="#">
										<i class="glyphicon glyphicon-trash icon-white"></i>Delete
									</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>    
    		</div>
    	</div>
    </div>	
</div>

<?php
include_once 'footer.php';
?>