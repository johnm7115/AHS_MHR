<!DOCTYPE html>
<?php 
    session_start();
    
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Add more as avalible
        $allowedUsernames = array("clerk");
        
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
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo isset($attemptFailed) ? "Invalid Credentials." : ""; ?>
        <!-- Temporary -->
        <form method="POST">
            Username:<br>
            <input type="text" name="username">
            <br>
            Password:<br>
            <input type="password" name="password">
            <input type="submit" value="Submit">
        </form>
        <p>Use username {clerk, ...} and any password to login.</p>
    </body>
</html>
