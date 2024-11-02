<?php
session_start();

include "db.php";

if(@$_GET['id']){
$id = $_GET['id'];
$delete =mysqli_query($conn,"DELETE FROM users1 WHERE id = $id");
}


$sql = "SELECT * FROM users1";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" onclick="window.location.href='http://localhost/Signup_Login/home.php'"><strong>Data</strong></a>
        </div>
    </nav>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>
    <?php
    if ($result->num_rows > 0) {

        echo "<table class='table'><tbody><tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th><th>Phone Number</th><th>DELETE</th></tr></tbody>";
    ?>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["uname"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["pass"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><a href='data.php?id=" . <?php echo $row['id'];?> . "' class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
    <?php
        }
        echo "</table>";
    } else {
        echo "0 results";
    } ?>
    <?php if (empty($_SESSION['uname'])) {
        $_SESSION['uname'] = "";
    } else {
        echo "<h3> Hello, " .  $_SESSION['uname'] . " </h3>";
    }
    ?>
    <button type="button" class="btn btn-primary" onclick="window.location.href='http://localhost/Signup_Login/home.php'">Home</button>
    <button type="button" class="btn btn-success" onclick="window.location.href='http://localhost/Signup_Login/dashboard.php'">Dashboard</button>

</body>

</html>