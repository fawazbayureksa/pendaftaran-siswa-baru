<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title">Data Calon Siswa</h4>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Data Siswa
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="zero_config">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama_siswa</th>
                                    <th>Alamat</th>
                                    <th>Tempat_lahir</th>
                                    <th>Tanggal_lahir</th>
                                    <th><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM c_siswa");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?= $data['nisn'] ?></td>
                                        <td><?= $data['nama_lengkap'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['tempat'] ?></td>
                                        <td><?= $data['tanggal_lahir'] ?></td>
                                        <!-- <td><?= $data['jenis_kelamin'] ?></td>
                            <td><?= $data['nik'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['asal_sekolah'] ?></td> -->
                                        <td>
                                            <a href="index.php?page=detail-siswa&id=<?=$data['id_siswa']?>" class="btn btn-success btn-sm"> <i class="fa fa-eye"></i> Lihat</a>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>