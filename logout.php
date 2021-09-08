<?php
session_start();

$_SESSION['siswa'] = $_SESSION[''];

session_unset();
session_destroy();

echo "<script>alert('Berhasi Logout') </script>";
     echo "<script>location='login.php'</script>";
?>