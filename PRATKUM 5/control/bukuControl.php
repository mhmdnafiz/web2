<?php

require_once "model/daftarBuku.php";

class bukuControl{
    public function jalankan(){
        //mengakses model
        $data = new daftarBuku();

        //memberi data model ke view dan menampilakn view
        include "view/bukuView.php";
        
    }
}