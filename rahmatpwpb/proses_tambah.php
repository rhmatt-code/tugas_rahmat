<?php
    include('connection.php');

    $nis = $_REQUEST['nis'];
    $nama = $_REQUEST['nama'];
    $kelas = $_REQUEST['kelas'];
    $jurusan = $_REQUEST['jurusan'];
    
    $query = $koneksi->query("insert into tbsiswa values('$nis','$nama','$kelas','$jurusan')");
?>