<?php
    $database = "concurso";
    $host = "localhost:3307";
    $user = "root";
    $pass = "";

    $conex = mysqli_connect($host, $user, $pass);
    $data = mysqli_select_db($conex, $database);

?>