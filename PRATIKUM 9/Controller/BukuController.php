<?php

require_once "model/DaftarBuku.php";

class BukuController {
    public function jalankan() {
        $Data = new DaftarBuku(); 
        include "View/BukuView.php";  // Mengirimkan variabel $data ke view
    }

    public function simpan() {
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('Location: /index.php');
        exit;
    }

    public function hapus() {
        $id = $_POST['id_hapus'];
        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: /index.php');
        exit;
    }
    public function edit (){
        //index.php/edit? Id=5
        $id= $_GET ['id'];

        $daftar_buku=new DaftarBuku();
        $buku=$daftar_buku->getBukuById($id);

        if($buku){
            include_once "View/editBukuView.php";
        }
        else{
            header ("location :http://localhost/index.php");
        }
    }
    public function update ( ){
        $buku = new Buku ($_POST ['judul'], $_POST ['pengarang'], $_POST ['penerbit'], $_POST ['tahun'] );
        $buku ->setId($_POST['id']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->update ($buku);

        header ('Location: http://localhost/index.php');
    }
}