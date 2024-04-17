<?php

include_once "Persegi.php";

class PerhitunganPersegi {

    public function hitungLuas(Persegi $persegi): int {
        $sisi = $persegi->getSisi();
        $luas = $sisi * $sisi;
        return $luas;
    }
}
$persegi = new Persegi(3);
$perhitungan = new PerhitunganPersegi();
echo "Luas Persegi dengan sisi " . $persegi->getSisi() . " adalah " . $perhitungan->hitungLuas($persegi) . " satuan luas.";