
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
                        <h3 class="text-center">SCAN RAPOR</h3>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center"><embed src="admin/upload/<?=$data['scan_rapor']?>" width="500" height="700"  type="application/pdf"></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>