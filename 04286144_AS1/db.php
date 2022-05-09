<!-- Database Connection Page -->

<?php

$serverName = "localhost";
$dBUsername = "root";
$dBpassword = "";
$dbName = "userstest";

$conn = mysqli_connect($serverName, $dBUsername, $dBpassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}