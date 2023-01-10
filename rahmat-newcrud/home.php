<?php 
    include "connection.php";

    $data = $connection->query("select * from data");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body class="container">
    <a href="add.php"> Add Data </a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Name</th>
                <th>Class</th>
                <th>Action</th>
            <tr>
        </thead>
        <tbody>
        <?php
                foreach ($data as $datas){
                    echo "<tr>";
                    echo "<td>";
                        echo $datas["nis"];
                    echo "</td>";
                    echo "<td>";
                        echo $datas["name"];
                    echo "</td>";
                    echo "<td>";
                        echo $datas["class"];
                    echo "</td>";
                    echo "<td>";
                        echo"<a href='edit.php?id=" . $datas["id"] . "'>Edit |</a>";
                        echo"<a href='process_delete.php?id=" . $datas["id"] . "'> Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                };
            ?>
        </tbody>
    </table>
</body>
</html>