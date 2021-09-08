<?php
include 'koneksi.php';

$query = mysqli_query($db, "SELECT * FROM c_siswa where id_siswa='$_GET[id]'");
($data = mysqli_fetch_assoc($query))

?>
<title>Scan Rapor</title>


<h1 align="center"><embed src="upload/<?= $data['scan_rapor'] ?>" width="500" height="700" type="application/pdf"></h1>