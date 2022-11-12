<?php

$server = "localhost";
$user = "root";
$password = "root";
$database_name = "db_pweb_08";

$db = mysqli_connect($server, $user, $password, $database_name);

if (!$db) {
    die("Failed to connect with database: " . mysqli_connect_error());
}
