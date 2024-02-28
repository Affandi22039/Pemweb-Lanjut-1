// routes/web.php

use App\Http\Controllers\NilaiController;

Route::get('/', [NilaiController::class, 'index']);
Route::post('/konversi', [NilaiController::class, 'konversi'])->name('nilai.konversi');
