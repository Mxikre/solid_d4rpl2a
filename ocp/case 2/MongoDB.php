<?php

include_once "DBMS.php";

class MongoDB extends DBMS {
    public function createConnection(): void {
        echo "Creating MongoDB connection...\n";
    }
}

?>
