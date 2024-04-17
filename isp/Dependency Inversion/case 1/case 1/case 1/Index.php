<?php
include_once "Persegi.php";
include_once "Kubus.php";

echo "Persegi <br>";
$duadimensi = new Persegi2();
$duadimensi->calculateArea();

echo "Kubus <br>";
$tigadimensi = new Kubus();
$tigadimensi->calculateArea();
$tigadimensi->calculateVolume();




?>