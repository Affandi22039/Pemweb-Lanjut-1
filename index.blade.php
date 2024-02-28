<!-- resources/views/nilai/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Konversi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Konversi Nilai</h2>

        @if(isset($nilai))
            <div class="alert alert-success">
                <strong>Nilai Akhir:</strong> {{ $nilai->hitungNilaiAkhir() }} <br>
                <strong>Nilai Konversi Huruf:</strong> {{ $nilai->konversiNilaiHuruf() }}
            </div>
        @endif

        <form action="{{ route('nilai.konversi') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="partisipasi">Nilai Partisipasi:</label>
                <input type="number" class="form-control" id="partisipasi" name="partisipasi" required>
            </div>
            <div class="form-group">
                <label for="tugas">Nilai Tugas:</label>
                <input type="number" class="form-control" id="tugas" name="tugas" required>
            </div>
            <div class="form-group">
                <label for="uts">Nilai UTS:</label>
                <input type="number" class="form-control" id="uts" name="uts" required>
            </div>
            <div class="form-group">
                <label for="uas">Nilai UAS:</label>
                <input type="number" class="form-control" id="uas" name="uas" required>
            </div>
            <button type="submit" class="btn btn-primary">Konversi</button>
        </form>
    </div>
</body>
</html>
