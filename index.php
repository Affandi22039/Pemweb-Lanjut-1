<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Konversi Nilai</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="partisipasi">Nilai Partisipasi:</label>
            <input type="text" class="form-control" id="partisipasi" name="partisipasi" required>
        </div>
        <div class="form-group">
            <label for="tugas">Nilai Tugas:</label>
            <input type="text" class="form-control" id="tugas" name="tugas" required>
        </div>
        <div class="form-group">
            <label for="uts">Nilai UTS:</label>
            <input type="text" class="form-control" id="uts" name="uts" required>
        </div>
        <div class="form-group">
            <label for="uas">Nilai UAS:</label>
            <input type="text" class="form-control" id="uas" name="uas" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'NilaiAkhir.php';
        include 'KonversiNilai.php';

        $partisipasi = $_POST['partisipasi'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        $nilaiAkhirObj = new NilaiAkhir($partisipasi, $tugas, $uts, $uas);
        $nilaiAkhir = $nilaiAkhirObj->hitungNilaiAkhir();

        $konversiNilaiObj = new KonversiNilai($nilaiAkhir);
        $nilaiHuruf = $konversiNilaiObj->konversiNilaiHuruf();

        echo "<h4>Nilai Akhir (NA): " . number_format($nilaiAkhir, 2) . "</h4>";
        echo "<h4>Nilai Konversi Huruf (NH): " . $nilaiHuruf . "</h4>";
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
