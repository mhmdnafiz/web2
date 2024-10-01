<?php
require_once "orangBiasa.php";
require_once "orangIngg.php";
require_once "mahasiswa.php";
require_once "nilai.php";

$nafiz = new orangBiasa();
$nafiz->setNama("nafiz ");
$nafiz->ucapSalam();
echo "<br>";

$ais = new orangIngg();
$ais->setNama("ais ");
$ais->ucapSalam();
echo "<br>";

// mahasiswa
$nafiz = new orangBiasa();
$nafiz->setNama("nafiz ");
$nafiz->ucapSalam();

$mahasiswa = new mahasiswa();
$mahasiswa->setNama("nafiz");
$mahasiswa->setNim("701230083");

// nilai
$nilaimahasiswa = new nilai();
$nilaimahasiswa->setTugas(80);
$nilaimahasiswa->setUts(99);
$nilaimahasiswa->setUas(93);

// set nilai
$mahasiswa->setnilai($nilaimahasiswa);

//  output 
echo "Nilai mahasiswa " . $mahasiswa->getNama() . ": <br>";
echo "Tugas: " . $nilaimahasiswa->getTugas() . "<br>";
echo "UTS: " . $nilaimahasiswa->getUts() . "<br>";
echo "UAS: " . $nilaimahasiswa->getUas() . "<br>";

?>
