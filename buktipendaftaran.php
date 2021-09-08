<?php
$id = $_GET['id'];
include 'admin/koneksi.php';
$query = mysqli_query($db,"SELECT * FROM c_siswa where id_siswa = '$id'");
$data = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran</title>
</head>

<body>


    <h2 align="center">PANITIA PENDAFTARAN SISWA</h2>
    <h3 align="center">SMA NEGERI 1 GOWA</h3>
    <p align="center">Alamat : Jl Sungguminasa , Kab Gowa , Provinsi Sulawesi Selatan</p>
    <p style="color: red;" align="center">Email : sma1gowa@gmail.com</p>

    <hr>
    <br>
    <br>

    <h2 align="center"> KARTU BUKTI PENDAFTARAN </h2>
    <h3 align="center">No Pendaftar : <?=$data['id_siswa']?></h3>

    <table align="center" border="1" cellpadding="10">

        <tr bgcolor="#ADD8E6">
            <th>Nama Siswa</th>
            <td><?=$data['nama_lengkap']?></td>
        </tr>
        <tr>
            <th>NISN</th>
            <td><?=$data['nisn']?></td>
        </tr>
        <tr bgcolor="#ADD8E6">
            <th>Asal Sekolah</th>
            <td><?=$data['asal_sekolah']?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?=$data['email']?></td>
        </tr>
    </table>
    <br>
    <br>
    <p align="center"> Kartu ini merupakan bukti bahwa siswa yang disebutkan di atas telah terdaftar</p>
    <br>
    <br>
    <br>
    <tr>
        <p align="center"> Ketua Panitia</p>
        <br>
        <br>
        <br>
        <p align="center">ttd</p>
        <p align="center">Kamariah</p>
    </tr>

</body>

<script>
    window.print();
</script>

</html>