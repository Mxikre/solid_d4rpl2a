<?php
include_once "FiturCetak.php";
include_once "FiturScan.php";

class PrinterMidRange implements FiturCetak, FiturScan {
    public function terimaCetak(): void{
        echo "Cetak <br>";
    }
    public function scanKertas(): void{
        echo "Scaning <br>";
    }

}

?>