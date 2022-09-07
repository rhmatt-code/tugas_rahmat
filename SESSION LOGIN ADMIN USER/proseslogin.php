<?php
    include("koneksi.php");


    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];



    $query = $koneksi->query("select * from user where username='$username' AND password='$password'")->fetchAll();
    

    if (count($query) > 0){
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $query[0]["role"];
        if ($_SESSION['role'] == "admin"){
            header("Location:admin.php");
        }
        else if($_SESSION['role'] == "user" ) {
            header("Location:user.php");
        }
    }
    else{

        header("Location:login.php");
    }
?>