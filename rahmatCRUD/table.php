<?php
    include('connection.php');

    $query = $koneksi->query("select tbsiswa.nis, tbsiswa.nama, tbkelas.nama_kelas, tbjurusan.nama_jurusan FROM((tbsiswa inner join tbkelas ON tbsiswa.idkelas=tbkelas.idkelas)inner join tbjurusan ON tbsiswa.idjurusan=tbjurusan.idjurusan);")->fetchAll();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table Database</h1>
    <table>
        <thead>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </thead>
        <tbody>
            <?php
                foreach ($query as $querys){
                    echo "<tr>";
                    echo "<td>";
                        echo $querys["nis"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["nama"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["nama_kelas"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["nama_jurusan"];
                    echo "</td>";
                    echo "</tr>";
                };
            ?>
        </tbody>
    </table>
    <a href="tambah.php">Input Data</a>
    <a href="edit.php">Change Data</a>
</body>
</html>