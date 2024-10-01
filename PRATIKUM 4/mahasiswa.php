<?php

require_once "orang.php";
require_once "nilai.php";

class mahasiswa extends orang{
    protected string $Nim;
    protected Nilai $Nilai;

    public function setNiM($Nim){
    $this->Nim = $Nim;
}

    public function setNilai($Nilai){
    $this->Nilai = $Nilai;
}

public function getNim(){
    return $this->Nim;
}

public function getnilai(){
    return $this->Nilai;
}

public function tampilkanData(){
    echo "Nama : " . $this->nama . "<br>";
    echo "Nim : " . $this->Nim . "<br>";
    echo "Nilai Tugas : " . $this->Nilai->getTugas() . "<br>";
    echo "Nilai Uts : " . $this->Nilai->getUts() . "<br>";
    echo "Nilai Uas : " . $this->Nilai->getUas() . "<br>";
}



}

