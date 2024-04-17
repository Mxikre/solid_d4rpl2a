<?php
include_once "FiturCetak.php";
include_once "FiturScan.php";
include_once "FiturFax.php";

class PrinterFlagship implements FiturCetak, FiturScan, FiturFax {
    public function terimaCetak(): void{
        echo "Cetak <br>";
    }
    public function scanKertas(): void{
        echo "Scaning <br>";
    }
    public function terimaFax(): void{
        echo "Kirim Dokumen <br>";
    }

}

?>