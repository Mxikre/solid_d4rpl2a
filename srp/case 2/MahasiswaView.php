<?php

include_once "Mahasiswa.php";

class MahasiswaView {

    public function showMahasiswa(Mahasiswa $mhs): void {
        echo "NIM: " . $mhs->getNim() . "<br>";
        echo "Nama: " . $mhs->getNama() . "<br>";
    }
}

// Create a new Mahasiswa object
$mhs = new Mahasiswa("2205018", "Agus");

// Create a new MahasiswaView object
$view = new MahasiswaView();

// Show the details of the Mahasiswa object using MahasiswaView
$view->showMahasiswa($mhs);
?>
