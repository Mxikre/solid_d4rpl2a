<?php
include_once "PembayaranCustomer.php";
include_once "Debit.php";
include_once "Kredit.php";
include_once "Cash.php";

$payment = new PembayaranCustomer();
$debit = new Debit();
$kredit = new Kredit();
$cash = new Cash();

$payment->menerimaPembayaran($debit);
echo "<br>";
$payment->menerimaPembayaran($kredit);
echo "<br>";
$payment->menerimaPembayaran($cash);
echo "<br>";
?>