<?php

include 'koneksi.php';

mysqli_query($db,"DELETE FROM user where id_user = '$_GET[id]'");

echo "<script>alert('Data berhasil dihapus')</script>";
echo "<script>location='index.php?page=data-user'</script>";


?>