<?php 
    $status = "OK";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $status="SUCCESS";
    } else {
        $status = "ERROR";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form01.php" method="post">
        <label for="nim" >NIM </label>
            <input type="text" id="nim" name="nim" required >
            <br>
            <label for="nama" >Nama </label>
            <input type="text" id="nama" name="nama" required >
            <br>
            <button type="submit">Submit</button>
        </form>
    </form>

    <?php 
    if ($status == "SUCCESS") {
        echo "NIM: $nim";
        echo "<br>";
        echo "Nama: $nama";
    } else if ($status == "ERROR") {
        echo "Data tidak valid";
    } else if ($status == "OK") {
        echo "Silahkan isi form";
    }
    ?>
</body>
</html>