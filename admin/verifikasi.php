<div class="container-fluid">
    <?php
    $query = mysqli_query($db, "SELECT * FROM verifikasi where no_ijazah='$_GET[id]'");
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <h3 class="text-center"> Halaman Verifikasi Berkas</h3>
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
        <div class="card">
            <div class="card-header">
                <div class="card-title">Keterangan</div>
            </div>
            <div class="card-body">
                <div class="col-4"><?php echo $data['keterangan']; ?></div>
            </div>

        </div>
</div>

<?php
    }
?>