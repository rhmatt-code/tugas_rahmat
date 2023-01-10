<?php
    include "connection.php";
    $id = $_GET["id"];

    $connection->query("delete from data where id='$id'");

    Header("Location:home.php");

?>