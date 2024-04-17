<?php

include_once "KendaraanListrik.php";

class MobilListik extends KendaraanListrik {
    public function menggunakanBaterai(): void {
        echo "di charge kalau habis baterai nya !";
    }
    
}

?>