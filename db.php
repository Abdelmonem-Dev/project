<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "signup_login";
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


