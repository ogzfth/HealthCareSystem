<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "hospital_management_system";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}