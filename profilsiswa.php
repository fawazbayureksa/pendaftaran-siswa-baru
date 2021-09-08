<?php

$id = $_SESSION['siswa']['id_siswa'];

include 'admin/koneksi.php';
$query = mysqli_query($db, "SELECT * FROM c_siswa where id_siswa = '$id'");
$data = mysqli_fetch_array($query);

?>
<div class="content-wrapper">
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">PROFIL SISWA</h3>
                    </div>
                    <div class="card-body">
                    <div class="row justify-content-start">
                            <div class="col-6">No Ijazah </div>
                            <div class="col-4"><?= $data['no_ijazah'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">NISN </div>
                            <div class="col-4"><?= $data['nisn'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">NAMA LENGKAP </div>
                            <div class="col-4"><?= $data['nama_lengkap'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">Alamat</div>
                            <div class="col-4"><?= $data['alamat'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">Tempat Lahir</div>
                            <div class="col-4"><?= $data['tempat'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">Tanggal Lahir</div>
                            <div class="col-4"><?= $data['tanggal_lahir'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">Jenis kelamin</div>
                            <div class="col-4"><?= $data['jenis_kelamin'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">NIK</div>
                            <div class="col-4"><?= $data['nik'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">E-MAIL</div>
                            <div class="col-4"><?= $data['email'] ?></div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">Asal Sekolah</div>
                            <div class="col-4"><?= $data['asal_sekolah'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>