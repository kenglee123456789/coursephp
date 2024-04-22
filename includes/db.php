<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "coursephp";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    echo "connection failed";
}

?>
