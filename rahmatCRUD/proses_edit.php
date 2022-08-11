<?php
    include('connection.php');

    $nis = $_REQUEST['nis'];
    $nama = $_REQUEST['nama'];
    $kelas = $_REQUEST['kelas'];
    $jurusan = $_REQUEST['jurusan'];
    
    $query = $koneksi->query("UPDATE tbsiswa SET nama='$nama',idkelas='$kelas',idjurusan='$jurusan' WHERE nis = $nis");

    header('Location: table.php');
?>