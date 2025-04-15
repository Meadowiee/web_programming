<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data PHP</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <?php for($id = 1; $id <= 5; $id++) {?>
            <tr>
                <td>NIM <?= $id?></td>
                <td>Nama <?= $id?></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>