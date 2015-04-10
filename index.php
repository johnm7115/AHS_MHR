<!DOCTYPE html>
<?php 
    session_start();
    
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Add more as avalible
        $allowedUsernames = array("clerk", "assistant", "professional");
        
        if(in_array(strtolower($_POST["username"]), $allowedUsernames))
        {
            $_SESSION["userType"] = strtolower($_POST["username"]);
            header("Location: ./home.php");
            die();
        }
        else
        {
            $attemptFailed = true;
        }
    }
    
    $pageTitle = "AHS HIMS";
    include "./header.php"
?>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><span>HIMS</span></a>
    </div>
</div>
<!-- topbar ends -->

<div class="ch-container">
    <div class="row">
        <div class="col-lg-6">
            <h1>About Us</h1>
            <p>
        
            </p>
        </div>
        <div class="col-lg-6" style="border-left: 3px solid #bbbbbb;">
            <h1>Login</h1>

<div class="well col-md-9 center login-box">
	<div class="alert alert-info">
		<?php echo isset($attemptFailed) ? "Invalid Credentials." : ""; ?>
		Please login with your Username (clerk/ assistant / professional) and Password.
	</div>
		<form class="form-horizontal" method="POST">
			<fieldset>
				<div class="input-group input-group-lg">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username">
				</div>
				<div class="clearfix"></div><br>
				<div class="input-group input-group-lg">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="clearfix"></div>
				<div class="input-prepend">
					<label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
					</br>
					<a href="./forgotPassword.php">Forgot password?</a>
				</div>
				<div class="clearfix"></div>
					<p class="center col-md-5">
						<button type="submit" class="btn btn-primary">Login</button>
					</p>
			</fieldset>
		</form>
	</div>
     
<?php include "footer.php"; ?>
