<!-- app/Views/konversi_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Konversi Nilai</h1>

        <?php if (isset($errors)) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <form action="<?= base_url('konversi/hitungNilai') ?>" method="post">
            <label for="partisipasi">Nilai Partisipasi:</label>
            <input type="text" name="partisipasi" value="<?= old('partisipasi') ?>" required>

            <label for="tugas">Nilai Tugas:</label>
            <input type="text" name="tugas" value="<?= old('tugas') ?>" required>

            <label for="uts">Nilai UTS:</label>
            <input type="text" name="uts" value="<?= old('uts') ?>" required>

            <label for="uas">Nilai UAS:</label>
            <input type="text" name="uas" value="<?= old('uas') ?>" required>

            <button type="submit">Hitung Nilai</button>
        </form>

        <?php if (isset($nilaiAkhir) && isset($nilaiHuruf)) : ?>
            <h2>Hasil Konversi</h2>
            <p>Nilai Akhir: <?= $nilaiAkhir ?></p>
            <p>Nilai Huruf: <?= $nilaiHuruf ?></p>
        <?php endif ?>
    </div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
