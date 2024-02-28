<?php

class NilaiAkhir {
    private $partisipasi;
    private $tugas;
    private $uts;
    private $uas;

    public function __construct($partisipasi, $tugas, $uts, $uas) {
        $this->partisipasi = $partisipasi;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    public function hitungNilaiAkhir() {
        return ((2 * $this->partisipasi) + (3 * $this->tugas) + (2 * $this->uts) + (3 * $this->uas)) / 10;
    }
}

?>
