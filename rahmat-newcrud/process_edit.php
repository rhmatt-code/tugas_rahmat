<?php
    include('connection.php');
   
    $id = $_GET['id'];
    $nis = $_REQUEST['nis'];
    $name = $_REQUEST['name'];
    $class = $_REQUEST['class'];
    
    $query = $connection->query("UPDATE `data` SET `nis`='$nis',`name`='$name',`class`='$class' WHERE id = '$id'");

    header('Location: home.php');
?>