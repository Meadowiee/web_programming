<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A08RTbNQ8dL+zNTIr58aEQZ1+IDgfzGZCkS1Jr74ELT+ro0IeGizqPLForn7M" crossorigin="anonymous"></script>
    <title>Kalkulator</title>
</head>
<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card w-50">
            <form action="kalkulator.php" method="post">
                <div class="card-header">
                    <h4 class="mt-1">Kalkulator</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="angka1" class="form-label">Bilangan 1</label>
                        <input type="number" class="form-control" id="angka1" name="angka1" required>
                    </div>
                    <div class="mb-3">
                        <label for="angka2" class="form-label">Bilangan 2</label>
                        <input type="number" class="form-control" id="angka2" name="angka2" required>
                    </div>
                    <div class="mb-3">
                        <label for="hasil" class="form-label">Hasil</label>
                        <input type="number" class="form-control " id="hasil" name="hasil" disabled>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end m-2 gap-1">
                        <button type="submit" class="btn btn-primary">Hitung</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 + $angka2;
    ?>
        <script>
            document.getElementById('hasil').value = '<?=$hasil?>';
        </script>
    <?php }?>
</body>
</html>