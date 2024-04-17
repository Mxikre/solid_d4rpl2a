<?php

include_once "TipePembayaran.php";

class Debit extends TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan metode Debit diproses. \n";
    }
}

?>