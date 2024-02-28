// app/Http/Controllers/NilaiController.php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai.index');
    }

    public function konversi(Request $request)
    {
        $request->validate([
            'partisipasi' => 'required|numeric|min:0|max:100',
            'tugas' => 'required|numeric|min:0|max:100',
            'uts' => 'required|numeric|min:0|max:100',
            'uas' => 'required|numeric|min:0|max:100',
        ]);

        $nilai = Nilai::create($request->all());

        return view('nilai.index', ['nilai' => $nilai]);
    }
}
