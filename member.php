<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Page</title>
</head>
<body>
<a href="login.php">Login | </a>
<a href="logout.php">Logout</a><br>
<?php 
    echo $_SESSION['login'];
    $_SESSION['login'] = "ERROR";
?>
</body>
</html>

<!-- Cookies simpan di client -->
<!-- Session simpan di server -->

<!-- Ada 3 fungsi untuk kelola session -->
<!-- session_start(), session_unsent(), session_destroy() -->
<!-- $_SESSSION['heilo'] -->