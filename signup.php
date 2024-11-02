<?php
session_start();
include "db.php";
if (isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['confirm_pass'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);
    $phone = validate($_POST['phone']);
    $cpass = validate($_POST['confirm_pass']);

    if (!($pass === $cpass)) {
        header("Location: index.php?error=Password does not match");
        exit();
    } else {
        $pass = sha1($pass);
        $_SESSION['uname'] = $uname;
        $_SESSION['email'] = $email;
        $cookie_name = $uname;
        $cookie_value = $email;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
        if (empty($uname)) {
            header("Location: index.php?error=User Name is required");
            exit();
        } else if (empty($email)) {
            header("Location: index.php?error=Email is required");
            exit();
        } else if (empty($pass)) {
            header("Location: index.php?error=Password is required");
            exit();
        } else if (empty($phone)) {
            header("Location: index.php?error=Phone is required");
            exit();
        }

        $sql = "INSERT INTO users1 (uname,email,pass,phone)
        value('$uname','$email','$pass','$phone')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        header("Location: home.php");
        exit();
    }
}
