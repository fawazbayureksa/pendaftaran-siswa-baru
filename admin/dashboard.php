<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-info">
                <h3 style="color: white;">Administrator</h3>
            </div>
            <div class="card-body">
                <h3>Tanggal Hari ini : <?php
                                        echo date('Y-m-d')
                                        ?>
                </h3>
                <h3>Jumlah Siswa Mendaftar :

                    <?php
                    include 'koneksi.php';

                    $query = mysqli_query($db, "SELECT * FROM c_siswa");
                    $data = mysqli_num_rows($query);
                    echo $data;
                    ?>
                    <i class="fa fa-users"></i>

                </h3>
            </div>
        </div>
    </div>
</div>