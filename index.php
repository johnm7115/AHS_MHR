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

<div class="col-md-offset-1 col-md-10">
    <div class="row">
        <div class="col-lg-6">
            <h1>About Us</h1>
            <p>
                
            </p>
        </div>
        <div class="col-lg-6" style="border-left: 3px solid #bbbbbb;">
            <h1>Login</h1>
            <?php echo isset($attemptFailed) ? "Invalid Credentials." : ""; ?>
            <!-- Temporary -->
            <form method="POST">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password"><br />
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
            <p>Use username {clerk, assistant, professional, ...} and any password to login.</p>
        
<?php include "footer.php"; ?>
