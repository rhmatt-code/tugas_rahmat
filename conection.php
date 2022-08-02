<?php

    $con = new PDO ('mysql:host=localhost;dbname=sekolah','root','');

    $query = $con->query("select * from siswa");
?>

<h1>Data Siswa</h1>

<?php while($result = $query->fetch()){ ?>

    <p><?= $result['nama']; ?>

<?php } ?>

