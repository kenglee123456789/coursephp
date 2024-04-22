<?php 

session_start();

function checkLoggedIn()
{
    if(!isset($_SESSION['user_id']))
    {
        header("Location: login.php");
        exit();
    }
}
?>