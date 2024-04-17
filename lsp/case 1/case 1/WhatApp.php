<?php

include_once "VideoGroupManager.php";

class WhatApp extends VideoGroupManager {
    public function chat() {
        echo "P <br>";
    }

    public function sendPhotosAndVideos() {
        echo "P bagi jawaban <br>";
    }

    public function callGroupVideo() {
        echo "Berbunyi kecuali di silent <br>";
    }


}

?>