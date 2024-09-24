<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
    <?php
    include "visibilty.php";

    $visibility = new visibility();
    $visibility-> tampilkanData();

        echo "<br>";

        echo "akses di luar kelas" . "<br>";
        echo "public " . $visibility->public . "<br>";
       // echo "private" . $visibility->private . "<br>";
        // echo "protected" . $visibility->protected . "<br>"; 
        echo "<br> <br>";
        echo "<h2> konsep pewarisan </h2>";

        include "mahasiswa.php";

        $mahasiswa = new mahasiswa("nafiz ganteng masyaallah");
        $mahasiswa->ucapSalam();

        $mahasiswainggris = new mahasiswaAsing("ais ganteng masyaallah");
        $mahasiswainggris->ucapSalam();


    ?>

</div>
</body>
</html>