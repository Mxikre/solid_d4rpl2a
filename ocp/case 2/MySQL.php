<?php

include_once "DBMS.php";

class MySQL extends DBMS {
    public function createConnection(): void {
        echo "Creating MySQL connection...\n";
    }
}

?>
