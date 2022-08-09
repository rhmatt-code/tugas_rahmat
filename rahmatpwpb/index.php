<?php
    include('connection.php');

    $classes = $koneksi->query("select * from tbkelas")->fetchAll();
    $jurusan = $koneksi->query("select * from tbjurusan")->fetchAll();
    
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
    <form action="proses_tambah.php" method="POST">
        <span>Input Your NIS</span>
        <input name="nis" type="name">
        <br>
        <span>Input Your Name</span>
        <input name="nama" type="name">
        <br>
        <span>Kelas</span>
        <select name="kelas">
            <?php
                foreach ($classes as $class){
                    echo "<option value='" . $class["idkelas"] . "'>";
                        echo $class["nama_kelas"];
                    echo "</option>";
                };
            ?>
        </select>
        <br>
        <span>Jurusan</span>
        <select name="jurusan">
        <?php
                foreach ($jurusan as $jurusann){
                    echo "<option value='" . $jurusann["idjurusan"] . "'>";
                        echo $jurusann["nama_jurusan"];
                    echo "</option>";
                };
            ?>
        </select>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>