<?php
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
include_once 'header.php';
?>
<body>
    <div class="alert-topCenter col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
    </div>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span>A.H.S.</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i>
                    <span class="hidden-xs"> Medical Clerk</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="profile">Profile</a></li>
                    <!--<li><a href="accountsettings">Account Settings</a></li>
                    <li><a href="#">Notification Settings</a></li>-->
                    <li class="divider"></li>
                    <li><a href="logout">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>
    <!-- topbar ends -->
    
    <div class="ch-container">
        <div class="row">
            <!-- left menu starts -->
            <div class="col-sm-2 col-lg-2">
                <div class="sidebar-nav">
                    <div class="nav-canvas">
                        <div class="nav-sm nav nav-stacked">
                        </div>
                                                    <ul class="nav nav-pills nav-stacked main-menu">
    <li class="nav-header">Go To</li>
    <li><a class="ajax-link" href="/home"><i class="glyphicon glyphicon-home"></i><span> Home</span></a></li>
    <li class="accordion">
        <a href="#"><i class="glyphicon glyphicon-calendar"></i><span> Appointments</span></a>
        <ul class="nav nav-pills nav-stacked">
            <li><a href="/appointments/create"> Create Appointment</a></li>
            <li><a href="/appointments"> View Appointments</a></li>
        </ul>
    </li>
    <li><a class="ajax-link" href="/patients"><i class="glyphicon glyphicon-user"></i><span> Patients</span></a></li>
</ul>
                                            </div>
                </div>
            </div>
            <!--/span-->
            <!-- left menu ends -->
            
            <noscript>
                <div class="alert alert-block col-md-12">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
            </noscript>
            
            <div id="content" class="col-lg-10 col-sm-10">
                <div><ul class="breadcrumb"><li><a href="./home.php">Home</a></li></ul></div>
                

<div class = "row">

	

</div>
<!-- Home dash ends -->
            </div><!--/#content.col-md-0-->
        </div><!--/fluid-row-->
        <hr>
                <footer class="row">
        
            <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; </p>
            <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: 
                <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
        
        </footer>
    </div><!--/.fluid-container-->
</body>
<?php
include_once './footer.php';
?>