<?php

require_once "buku.php";
require_once "Database/database.php";

class daftarBuku{
    public function getdata(){
        $db = new database();
        $koneksi = $db->getkoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;
    }

    public function getkolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}