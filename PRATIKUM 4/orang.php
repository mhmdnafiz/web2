<?php

class Orang{
    protected $nama;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function ucapSalam(){
        echo "Halo, perkenalkan nama saya " . $this->nama . "<br>";
    }
}
