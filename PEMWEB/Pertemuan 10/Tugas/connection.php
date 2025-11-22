<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "user-dat";

$connect = new mysqli($host, $user, $password, $database);

if ($connect) {
    echo "Connection Success";
} else {
    echo "Connection Failed: " . mysqli_connect_error();
}
