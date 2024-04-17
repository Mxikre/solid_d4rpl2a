<?php
include_once "Mobil.php";
include_once "MobilListrik.php";

$mobilbbm = new Mobil();
$mobillistrik = new MobilListrik();

echo "Mobil Yang Pake BBM <br>";
$mobilbbm->menggunakanBBM();

echo "<br>Mobil Yang Pake Baterai <br>";
$mobillistrik->menggunakanBaterai();

?>