<?php

mysqli_query($db,"DELETE FROM c_siswa WHERE id_siswa = '$_GET[id]'");
echo "<script>alert('Siswa Berhasil Dihapus')</script>";
echo "<script>location='index.php?page=data-siswa'</script>";




?>