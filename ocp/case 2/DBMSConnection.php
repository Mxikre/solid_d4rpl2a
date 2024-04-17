<?php

include_once "DBMS.php";

class PembayaranCustomer {
    public function connect(DBMS $dbms): void {
        $dbms->createConnection();
    }
}

$mysql = new MySQL();
$mongodb = new MongoDB();

$dbmsConnection = new DBMSConnection();
$dbmsConnection->connect($mysql);
$dbmsConnection->connect($mongodb);
?>
