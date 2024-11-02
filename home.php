<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #a1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            margin: 0;
        }
    </style>



</head>

<body>
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><strong>Home</strong></a>
        </div>
    </nav>

    <!-- As a heading -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>

    <div id="a1">
        <h1>Welcome to the Home Page <?php echo $_SESSION['uname']; ?></h1><br>
    </div>
    <div id="a1">
        <button type="button" class="btn btn-primary" onclick="window.location.href='http://localhost/Signup_Login/index1.php'">Logout</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='http://localhost/Signup_Login/data.php'">Data File</button>
    </div>
    <div>
</body>

</html>