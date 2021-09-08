    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <?php
                $query = mysqli_query($db, "SELECT * FROM c_siswa where id_siswa='$_GET[id]'");
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">
                                Data Siswa
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col-6">No Ijazah </div>
                                <div class="col-4"><?= $data['no_ijazah'] ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NISN </div>
                                <div class="col-4"><?php echo $data['nisn']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NAMA LENGKAP </div>
                                <div class="col-4"><?php echo $data['nama_lengkap']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">Alamat</div>
                                <div class="col-4"><?php echo $data['alamat']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">Tempat Lahir</div>
                                <div class="col-4"><?php echo $data['tempat']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">Tanggal Lahir</div>
                                <div class="col-4"><?php echo $data['tanggal_lahir']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">Jenis kelamin</div>
                                <div class="col-4"><?php echo $data['jenis_kelamin']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NIK</div>
                                <div class="col-4"><?php echo $data['nik']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">E-MAIL</div>
                                <div class="col-4"><?php echo $data['email']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">Asal Sekolah</div>
                                <div class="col-4"><?php echo $data['asal_sekolah']; ?></div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Foto Siswa</div>
                                        </div>
                                        <div class="card-body"></div>
                                        <img src="upload/<?= $data['foto_siswa'] ?>" style="width:200px;" class="mr-3" alt="...">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Scan Rapor</div>
                                        </div>
                                        <div class="card-body"></div>
                                        <embed src="upload/<?= $data['scan_rapor'] ?>" width="200" height="300" type="application/pdf"></h1>
                                        <div class="card-footer">
                                            <a href="scanrapor.php?id=<?= $data['id_siswa'] ?>" class="btn btn-success">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Scan Kartu Keluarga</div>
                                        </div>
                                        <div class="card-body"></div>
                                        <embed src="upload/<?= $data['foto_kk'] ?>" width="200" height="300" type="application/pdf">
                                        <div class="card-footer">
                                            <a href="scankk.php?id=<?= $data['id_siswa'] ?>" class="btn btn-success">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="index.php?page=hapus_data_siswa&id=<?php echo $data['id_siswa']; ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                <a href="index.php?page=verifikasi&id=<?php echo $data['no_ijazah']; ?>" class="btn btn-success"> <i class="fa fa-paper-plane"></i> Verifikasi</a>
                                <a href="index.php?page=data_siswa" class="btn btn-default"> Kembali </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>