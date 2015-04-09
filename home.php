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
elseif($_SESSION["userType"] == "assistant")
{
    $pageTitle = "Home";
    include_once "assistantHome.php";
}
elseif($_SESSION["userType"] == "professional")
{
    $pageTitle = "Home";
    include_once "professionalHome.php";
}
?>
