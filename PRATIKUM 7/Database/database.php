<<<<<<< HEAD
<?php

class database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $DBname = 'perpustakaan';
    private $koneksi;


public function __construct ()
{
    $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->DBname);
}

public function __destruct()
{
    $this->koneksi->close();
}

public function getkoneksi(){
    return $this->koneksi;
}
=======
<?php

class database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $DBname = 'perpustakaan';
    private $koneksi;


public function __construct ()
{
    $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->DBname);
}

public function __destruct()
{
    $this->koneksi->close();
}

public function getkoneksi(){
    return $this->koneksi;
}
>>>>>>> 44a1cfb85859653982aab3aa7b799ec5b3368a96
}