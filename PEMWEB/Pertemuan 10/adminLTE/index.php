<?php
  include "../Practice/connection.php";

  $userEmail = $_POST['email'];
  $userPassword = $_POST['password'];

  /* $emailValid = "john.doe@user.com";
  $passwordValid = "123";

  $isValid = ($userEmail === $emailValid && $userPassword === $passwordValid);
 */

  $query = "SELECT * FROM user WHERE email = '$userEmail' AND pass = '$userPassword'";
  $read = mysqli_query($connect, $query);

  $isValid = mysqli_num_rows($read) > 0;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>AdminLTE v4</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
  <?php 
    if ($isValid):
  ?>
  <script>window.location.href = '/PEMWEB/Pertemuan 10/adminLTE/dist/pages/index.html'</script>
  <?php 
    else:
  ?>
  <script> 
    alert("Login failed. Please check your email and password.");
    window.history.back();
  </script>
  <?php 
    endif
  ?>
</body>
</html>