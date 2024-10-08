<?php

require_once "buku.php";

class daftarBuku{
    public function getdata(){
        $daftar_buku = array(
            new buku('belajar pemrograman web', 'nafiz', 'ragit', '2023' ),
            new buku('mtk diskrit', 'ais', 'faizal', '2022' ),
            new buku('buku hantu', 'aldi', 'sistem informasi', '2023' ),
            new buku('buku horor', 'nadhif', 'sistem informasi', '2023' ),
        );

        return $daftar_buku;
    }

    public function getkolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}