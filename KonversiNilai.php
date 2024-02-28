<?php

class KonversiNilai {
    private $nilaiAkhir;

    public function __construct($nilaiAkhir) {
        $this->nilaiAkhir = $nilaiAkhir;
    }

    public function konversiNilaiHuruf() {
        if ($this->nilaiAkhir >= 85 && $this->nilaiAkhir <= 100) {
            return 'A';
        } elseif ($this->nilaiAkhir >= 80 && $this->nilaiAkhir < 85) {
            return 'A-';
        } elseif ($this->nilaiAkhir >= 75 && $this->nilaiAkhir < 80) {
            return 'B+';
        } elseif ($this->nilaiAkhir >= 70 && $this->nilaiAkhir < 75) {
            return 'B';
        } elseif ($this->nilaiAkhir >= 65 && $this->nilaiAkhir < 70) {
            return 'B-';
        } elseif ($this->nilaiAkhir >= 60 && $this->nilaiAkhir < 65) {
            return 'C+';
        } elseif ($this->nilaiAkhir >= 55 && $this->nilaiAkhir < 60) {
            return 'C';
        } elseif ($this->nilaiAkhir >= 40 && $this->nilaiAkhir < 55) {
            return 'D';
        } elseif ($this->nilaiAkhir >= 0 && $this->nilaiAkhir < 40) {
            return 'E';
        } else {
            return 'Invalid';
        }
    }
}

?>
