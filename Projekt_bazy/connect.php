<?php

$host = "localhost";
$dbname = "project_forum";
$dbusername = "root";
$dbpassword = "";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if($conn->connect_errno) {
    die("Connection error: " . $conn->connect_error);
}