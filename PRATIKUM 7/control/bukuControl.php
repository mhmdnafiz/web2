<<<<<<< HEAD
<?php

require_once "model/daftarBuku.php";

class bukuControl{
    public function jalankan(){
        //mengakses model
        $data = new daftarBuku();

        //memberi data model ke view dan menampilakn view
        include "view/bukuView.php";
        
    }
=======
<?php

require_once "model/daftarBuku.php";

class bukuControl{
    public function jalankan(){
        //mengakses model
        $data = new daftarBuku();

        //memberi data model ke view dan menampilakn view
        include "view/bukuView.php";
        
    }
>>>>>>> 44a1cfb85859653982aab3aa7b799ec5b3368a96
}