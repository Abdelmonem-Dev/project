<?php
session_start();
include "db.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
$email = validate($_POST['email']);
$pass = validate($_POST['pass']);
$pass = sha1($pass);

$_SESSION['uname'];
$_SESSION['email'];
if (empty($email)) {

    header("Location: index1.php?error=Email is required");
    exit();
} else if (empty($pass)) {
    header("Location: index1.php?error=Password is required");
    exit();
}
$sql = "SELECT * FROM users Where email= '$email' and pass='$pass'";


$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['email'] === $email && $row['pass'] === $pass) {
        echo "Logged In!";
        header("Location: home.php");
        exit();
    } else {
        header("Location: index1.php?error=Incorrect Email or Password");
        exit();
    }
} else {
    header("Location: index1.php");
    exit();
}
