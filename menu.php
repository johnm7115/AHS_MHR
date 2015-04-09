<?php
if($_SESSION["userType"] == "clerk")
{
    include "clerkMenu.php";
}
if($_SESSION["userType"] == "assistant")
{
    include "assistantMenu.php";
}
if($_SESSION["userType"] == "professional")
{
    include "professionalMenu.php";
}