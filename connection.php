<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";
$dbport = 80; // Replace with your actual port number

// Specifying the port in mysqli_connect
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport)) {
    die("Failed to connect!");
}