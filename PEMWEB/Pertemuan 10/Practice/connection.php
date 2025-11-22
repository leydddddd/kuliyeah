<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "per10";

    $connect = new mysqli($host, $user, $password, $database);

    if ($connect)
    {
        echo "Connection Success";
    }
?>