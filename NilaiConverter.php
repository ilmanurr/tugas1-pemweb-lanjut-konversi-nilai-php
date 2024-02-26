<?php
class NilaiConverter {
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
        // Hitung nilai akhir sesuai dengan bobot yang diberikan
        $nilai_akhir = (($this->partisipasi * 2) + ($this->tugas * 3) + ($this->uts * 2) + ($this->uas * 3))/10;
        return $nilai_akhir;
    }

    public function konversiNilaiHuruf() {
        // Konversi nilai akhir ke dalam nilai huruf sesuai dengan standar Unesa
        $nilai_akhir = $this->hitungNilaiAkhir();
        if ($nilai_akhir >= 85) {
            return "A";
        } elseif ($nilai_akhir >= 80) {
            return "A-";
        } elseif ($nilai_akhir >= 75) {
            return "B+";
        } elseif ($nilai_akhir >= 70) {
            return "B";
        } elseif ($nilai_akhir >= 65) {
            return "B-";
        } elseif ($nilai_akhir >= 60) {
            return "C+";
        } elseif ($nilai_akhir >= 55) {
            return "C";
        } elseif ($nilai_akhir >= 40) {
            return "D";
        } else {
            return "E";
        }
    }
}
?>