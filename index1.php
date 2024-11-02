<?php
session_start();

session_unset();
session_destroy();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body style="background-color:#171717">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="mb-3">
        <h1 style="color:aliceblue">Welcome in the website</h1>
    </div>
    <form action="login.php" method="POST">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?><br>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="input" placeholder="name@example.com">
            </div>
            <label class="form-label">Password</label>
            <input type="password" name="pass" class="input"><br>
            <button type="sibmit" class="btn btn-primary">Login</button><br><br>
            <button type="button" class="btn btn-primary" onclick="window.location.href='http://localhost/Signup_Login/index.php'">Sign up</button>

    </form>
</body>

</html>
