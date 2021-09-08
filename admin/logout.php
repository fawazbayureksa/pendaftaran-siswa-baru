<?php

session_start();

$_SESSION['admin'] = $_SESSION[''];

session_unset();
session_destroy();

echo "<script>alert('Berhasil Logout') </script>";
echo "<script>location='login.php'</script>";

?>