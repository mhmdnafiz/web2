<?php
include "orang.php";
class mahasiswa extends orang{

public $nim;
public $prodi;

public function getNilaiSemester(){
    
}

}

// file mahasiswa asing
class mahasiswaAsing extends mahasiswa{
    
    //override
    public function ucapSalam()
    {
        echo "hello my name: " . $this->nama . "<br>";
    }
}

