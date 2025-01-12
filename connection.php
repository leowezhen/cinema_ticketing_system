<?php
$hostname = "localhost";

$username = "root";

$password = "";

$database_name = "cinema_ticketing_system";

$condb = mysqli_connect($hostname,$username,$password,$database_name);

if (!$condb) {
    die("Connection to database error.");
}
?>