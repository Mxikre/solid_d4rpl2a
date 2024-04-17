<?php
include_once "PrinterEntyLevel.php";
include_once "PrinterMidRange.php";
include_once "PrinterFlagship.php";

echo "Printer Entry-Level <br>";
$low = new PrinterEntryLevel();
$low->terimaCetak();

echo "Printer Mid-Range <br>";
$mid = new PrinterMidRange();
$mid->terimaCetak();
$mid->scanKertas();

echo "Printer Flagship <br>";
$high = new PrinterFlagship();
$high->terimaCetak();
$high->scanKertas();
$high->terimaFax();




?>