<?php 

    $connect = mysqli_connect("localhost", "root", "", "myformdb");
    if(!$connect){
        die("Connection failed: " . mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $sql = "INSERT INTO students (nim, nama) VALUES ('$nim', '$nama')";
    
        if(mysqli_query($connect, $sql)){
            echo "Data inserted successfully <br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }
    

    mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>