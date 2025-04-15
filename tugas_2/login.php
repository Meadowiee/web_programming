<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['login'] = 'OK';
        $_SESSION['username'] = $_POST['username'];
        header("Location: member.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A08RTbNQ8dL+zNTIr58aEQZ1+IDgfzGZCkS1Jr74ELT+ro0IeGizqPLForn7M" crossorigin="anonymous"></script>
    <title>Login page</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4 text-center rounded-4" style="width: 100%; max-width: 450px;">
            <h2 class="mb-4">Log in</h2>
            <form action="login.php" method="post">
                <div class="mb-3 text-start">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3 mb-3">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>