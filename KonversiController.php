// app/Controllers/KonversiController.php

namespace App\Controllers;

use App\Models\KonversiModel;
use CodeIgniter\Controller;

class KonversiController extends Controller
{
    public function index()
    {
        return view('konversi_view');
    }

    public function hitungNilai()
    {
        $validationRules = [
            'partisipasi' => 'required|numeric',
            'tugas' => 'required|numeric',
            'uts' => 'required|numeric',
            'uas' => 'required|numeric',
        ];

        $validationMessages = [
            'partisipasi' => [
                'required' => 'Nilai Partisipasi harus diisi.',
                'numeric' => 'Nilai Partisipasi harus berupa angka.',
            ],
            'tugas' => [
                'required' => 'Nilai Tugas harus diisi.',
                'numeric' => 'Nilai Tugas harus berupa angka.',
            ],
            'uts' => [
                'required' => 'Nilai UTS harus diisi.',
                'numeric' => 'Nilai UTS harus berupa angka.',
            ],
            'uas' => [
                'required' => 'Nilai UAS harus diisi.',
                'numeric' => 'Nilai UAS harus berupa angka.',
            ],
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $partisipasi = $this->request->getPost('partisipasi');
        $tugas = $this->request->getPost('tugas');
        $uts = $this->request->getPost('uts');
        $uas = $this->request->getPost('uas');

        $nilaiModel = new KonversiModel();

        $nilaiAkhir = (($partisipasi * 2) + ($tugas * 3) + ($uts * 2) + ($uas * 3)) / 10;

        $nilaiHuruf = $nilaiModel->konversiNilaiHuruf($nilaiAkhir);

        $data = [
            'nilaiAkhir' => $nilaiAkhir,
            'nilaiHuruf' => $nilaiHuruf,
        ];

        return view('konversi_view', $data);
    }
}
