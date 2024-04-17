<?php

include_once "TipePembayaran.php";

class PembayaranCustomer {
    public function menerimaPembayaran(PembayaranInterface $tipe): void {
        $tipe->memprosesPembayaran();
    }
}

$payment = new PembayaranCustomer();
$debit = new Debit();
$kredit = new Kredit();
$cash = new Cash();

$payment->menerimaPembayaran($debit);
$payment->menerimaPembayaran($kredit);
$payment->menerimaPembayaran($cash);
?>
