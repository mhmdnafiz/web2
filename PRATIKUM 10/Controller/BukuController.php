<?php

require_once "model/DaftarBuku.php";

class BukuController {
    public function jalankan(){
        $theme_value = "light";
        
        //mengambil nilai get
        if(isset($_GET['theme'])){
            $theme_value = $_GET['theme'];
        }
        //set cookie
        if(!isset($_COOKIE['theme']) || isset ($_GET['theme'])){
  setcookie('theme', $theme_value, time()+3600+24);
    }else{
       $theme_value = $_COOKIE['theme']; 
    }

    //hpaus cookie
    if(isset($_COOKIE['theme']) && isset ($_GET['hapus_theme'])){
        setcookie('theme');
    }

        $Data = new DaftarBuku(); 
        include "View/BukuView.php";  // Mengirimkan variabel $data ke view
    }

    public function simpan() {
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();

        $status = $daftar_buku->simpan($buku);

        if ($status){
            $_SESSION['BERHASIL'] = 'Data berhasil disimpan';

        }else{
            $_SESSION['gagal'] = 'Data gagal disimpan';

        }

        header('Location: /index.php');
        exit;
    }

    public function hapus() {
        $id = $_POST['id_hapus'];
        $daftar_buku = new DaftarBuku();
        $status = $daftar_buku->hapus($id);

        if ($status){
            $_SESSION['BERHASIL'] = 'Data berhasil dihapus';

        }else{
            $_SESSION['gagal'] = 'Data gagal dihapus';

        }

        


        header('Location: /index.php');
        exit;
    }
    public function edit (){
        //index.php/edit? Id=5
        $id= $_GET ['id'];

        $daftar_buku=new DaftarBuku();
        $status = $buku=$daftar_buku->getBukuById($id);
        if ($status){
            $_SESSION['BERHASIL'] = 'Data berhasil diedit';

        }else{
            $_SESSION['gagal'] = 'Data gagal diedit';

        }

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
           exit;
    }
}