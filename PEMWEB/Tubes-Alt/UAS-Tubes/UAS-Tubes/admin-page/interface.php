<?php

session_start();
include './connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Gunakan prepared statement
$stmt = $connect->prepare("SELECT * FROM admin WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $user = $result->fetch_assoc();

  if (password_verify($password, $user['password'])) {
    // Login sukses
    $_SESSION['username'] = $user['username'];
    $_SESSION['isLoggedIn'] = true;
    header("Location: ./dashboard.php");
    exit;
  }
}

echo "<script>alert('Login gagal!'); window.history.back();</script>";
