<?php 
 session_start(); 
 session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A08RTbNQ8dL+zNTIr58aEQZ1+IDgfzGZCkS1Jr74ELT+ro0IeGizqPLForn7M" crossorigin="anonymous"></script>
    <title>Logout Page</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4 text-center rounded-4" style="width: 100%; max-width: 350px;">
            <h2 class="mt-3">Welcome!</h2>
            <p class="text-muted mb-5 fs-6">Start your journey with my site.</p>
            <img src="images/notion.jpg" class="mb-5 rounded-circle border mx-auto d-block" style="max-height: 105px;"/>
            <a href="login.php" class="btn btn-primary">Login</a>
        </div>
    </div>
</body>
</html>