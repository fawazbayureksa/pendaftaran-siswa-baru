<?php

$id = $_SESSION['siswa']['id_siswa'];

include 'admin/koneksi.php';
$query = mysqli_query($db,"SELECT * FROM c_siswa where id_siswa = '$id'");
$data = mysqli_fetch_array($query);

?>
<div class="content-wrapper">
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">FOTO SISWA</h3>
                    </div>
                    <div class="card-body">
                    <h1 class="text-center"><img src="admin/upload/<?=$data['foto_siswa']?>" alt="" style="width:300px"></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>