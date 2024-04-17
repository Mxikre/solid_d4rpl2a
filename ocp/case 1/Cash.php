<?php

include_once "TipePembayaran.php";

class Cash extends TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan metode Cash diproses. \n";
    }
}

?>
