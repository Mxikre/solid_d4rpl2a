<?php

include_once "PostMediaManager.php";

class Instagram extends PostMediaManager {
    public function chat(): void {
        echo "P <br>";
    }
    public function publishPost(): void {
        echo "Upload foto dan video <br>";
    }
    public function callGroupVideo(): void {
        echo "Posting <br>";
    }


}

?>