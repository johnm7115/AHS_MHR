<?php
// This page just shows the correct homepage
session_start();
if(!isset($_SESSION["userType"]))
{
    echo "Not logged in";
    die();
}
elseif($_SESSION["userType"] == "clerk")
{
    $pageTitle = "Home";
    include_once "clerkHome.php";
}
?>
