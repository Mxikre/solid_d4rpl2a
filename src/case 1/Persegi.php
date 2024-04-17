<?php

class Persegi{

    public int $sisi;

    public function __construct(int $sisi) {
        $this->sisi = $sisi;
    }

    public function getSisi() {
        return $this->sisi;

    }
}

?>