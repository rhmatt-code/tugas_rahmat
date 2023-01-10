<?php
    include('connection.php');
   
    $nis = $_REQUEST['nis'];
    $name = $_REQUEST['name'];
    $class = $_REQUEST['class'];
    
    $query = $connection->query("insert into data values(null,'$nis','$name','$class')");

    header('Location: home.php');
?>