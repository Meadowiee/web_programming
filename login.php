<?php 
session_start();
$login = "OK";
$_SESSION['login'] = $login;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <a href="member.php">Member Page</a>
    <br>
    <?= $_SESSION['login'] ?>
</body>
</html>