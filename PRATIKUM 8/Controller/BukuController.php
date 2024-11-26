<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        // mengakses model
        $data = new DaftarBuku();

        // memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
        exit;
    }
    public function edit(){
        // index.php/edit?id=5
        $id = $_get {'id'};

        $daftar_buku = NEW DaftarBuku ();
        $buku = $daftar_buku->getBukuById($id);
        if($buku){
            include_once "/view/EditBukuView.php";
        }else{
            header("localtion: http://localhost/index.php");
        }

    }
}