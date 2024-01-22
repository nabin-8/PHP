<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "phpdb";

// Create connection 
$conn = @new mysqli(
    $servername,
    $username,
    $password,
    $dbName
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
