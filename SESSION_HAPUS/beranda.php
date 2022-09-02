<?php
    session_start();

    if(isset($_POST["username"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        
    }
    else{
        header("Location:form.php");
    }
    $username = $_SESSION["username"];

    echo "User Ada";
    echo "<br>";
    echo "<a href='user.php'>$username</a>";
    echo "<br>";
    echo "<a href='hapus_session.php'>Logout</a>";
?>