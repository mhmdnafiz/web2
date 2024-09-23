<?php 
include "orang.php";
include "bank_customer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1> HELLO PRATIKUM 2</H1>
    <div class="di">
        <?php
       $nasabah = new bankcustomer();
       $nasabah->setcustomerName  ('emely smith');
       $nasabah->setaddress  ("broni, kota jambi");
       $nasabah->setemail  ("emely.smith@gmail.com");
       $nasabah->card = "platinum";
       $nasabah->getacc = "wadiah";

       $nasabah->insertCard();
       $nasabah->enterPIN(123456);
        ?>
    </div>
</body>
</html>

<!-- localhost/index.php?nama=nafiz -->
<!--http://uinjambi.ac.id/beritapage=1&search=kuliah&orderBy=id -->