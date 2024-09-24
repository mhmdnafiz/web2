<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 4px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h2>Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tugas</th>
                <th>Uts</th>
                <th>Uas</th>
                <th>Total Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "nilai.php";

            $mhs1 = new Nilai();
            $mhs1->setTugas(56);
            $mhs1->setUts(55);
            $mhs1->setUas(54);

            $mhs2 = new Nilai();
            $mhs2->setTugas(53);
            $mhs2->setUts(52);
            $mhs2->setUas(51);

            $mhs3 = new Nilai();
            $mhs3->setTugas(50);
            $mhs3->setUts(49);
            $mhs3->setUas(48);

            echo "<tr>
                <td>1</td>
                <td>MUHAMMAD</td>
                <td>" . $mhs1->getTugas() . "</td>
                <td>" . $mhs1->getUts() . "</td>
                <td>" . $mhs1->getUas() . "</td>
                <td>" . $mhs1->totalNilai() . "</td>
            </tr>";

            echo "<tr>
                <td>2</td>
                <td>NAFIZ</td>
                <td>" . $mhs2->getTugas() . "</td>
                <td>" . $mhs2->getUts() . "</td>
                <td>" . $mhs2->getUas() . "</td>
                <td>" . $mhs2->totalNilai() . "</td>
            </tr>";

            echo "<tr>
                <td>3</td>
                <td>NOVAISHIAM</td>
                <td>" . $mhs3->getTugas() . "</td>
                <td>" . $mhs3->getUts() . "</td>
                <td>" . $mhs3->getUas() . "</td>
                <td>" . $mhs3->totalNilai() . "</td>
            </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>
