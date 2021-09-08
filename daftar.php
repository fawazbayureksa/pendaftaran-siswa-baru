<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="admin/assets/images/favicon.png">
    <title>Formulir Pendaftaran Siswa</title>

    <link href="admin/dist/css/style.min.css" rel="stylesheet">
    <style>
        label {
            color: white;
        }
    </style>

</head>

<body>
    <div class="main-wrapper">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div class="auth-wrapper d-flex no-block justify-content-start align-items-center bg-dark">
        <div class="container">
            <!-- <div class="auth-box bg-dark border-top border-secondary"> -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- <div class="card"> -->
                    <div class="card-header bg-primary">
                        <div class="card-title">
                            <h2 class="text-center" style="color:white"> Formulir Siswa Baru</h2>
                        </div>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>No Ijazah</label>
                                    <input type="text" class="form-control" placeholder="Nomor Ijazah" name="no_ijazah" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="text" class="form-control" placeholder="NISN" name="nisn" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap " name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat"></textarea>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" placeholder="Masukkan tempat Lahir" required class="form-control" name="tempat">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option value="">--Pilih--</option>
                                        <option value="laki-laki">Laki laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" placeholder="Masukkan NIK" required class="form-control" name="nik">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Asal Sekolah</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Asal sekolah" required name="asal_sekolah">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> E-mail</label>
                                    <input type="email" placeholder="Masukkan E-mail" required class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Password</label>
                                    <input type="password" placeholder="Masukkan Password" required class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Foto Siswa</label>
                                    <p><small class="text-danger"> <i>* ukuran file tidak lebih dari 1 mb</i> </small></p>
                                    <input type="file" class="form-control" required name="foto_siswa">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Scan Rapor Semester I - V</label>
                                    <p><small class="text-danger"> <i>* ukuran file tidak lebih dari 1 mb</i> </small></p>

                                    <input type="file" class="form-control" required name="scan_rapor">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Scan Kartu Keluarga</label>
                                    <p><small class="text-danger"> <i>* ukuran file tidak lebih dari 1 mb</i></small></p>
                                    <input type="file" class="form-control" required name="foto_kk">
                                </div>
                            </div>
                        </div>

                        <p class="text-center"><button type="submit" name="daftar" class="btn btn-success">Daftar</button>
                            <a href="login.php" class="btn btn-info"> Kembali </a></p>
                    </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>

    <script src="admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
</body>

</html>
<?php
include 'admin/koneksi.php';

if (isset($_POST['daftar'])) {
    $ijazah = $_POST['no_ijazah'];
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $alamat = $_POST['alamat'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tanggal_lahir'];
    $jenis = $_POST['jenis_kelamin'];
    $nik = $_POST['nik'];
    $asal = $_POST['asal_sekolah'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $nama_file = $_FILES['foto_siswa']['name'];
    $x = end(explode('.', $nama_file));
    $file_tmp = $_FILES['foto_siswa']['tmp_name'];



    $nama_file1 = $_FILES['scan_rapor']['name'];
    $x1 =  end(explode('.', $nama_file1));
    $file_tmp1 = $_FILES['scan_rapor']['tmp_name'];


    $nama_file2 = $_FILES['foto_kk']['name'];
    $x2 =  end(explode('.', $nama_file2));
    $file_tmp2 = $_FILES['foto_kk']['tmp_name'];

    $foto = md5(rand()) . '.' . $x;
    $rapor = md5(rand()) . '.' . $x1;
    $kk = md5(rand()) . '.' . $x2;


    move_uploaded_file($file_tmp, 'admin/upload/' . $foto);
    move_uploaded_file($file_tmp1, 'admin/upload/' . $rapor);
    move_uploaded_file($file_tmp2, 'admin/upload/' . $kk);

    mysqli_query($db, "INSERT INTO c_siswa (no_ijazah,nisn,nama_lengkap,alamat,tempat,tanggal_lahir,jenis_kelamin,nik,email,password,asal_Sekolah,foto_siswa,scan_rapor,foto_kk)
             VALUES ('$ijazah','$nisn','$nama','$alamat','$tempat','$tgl','$jenis','$nik','$email','$pass','$asal','$foto','$rapor','$kk')");

    mysqli_query($db, "INSERT INTO login VALUES ('$email','$pass','$nama')");
    
    mysqli_query($db, "INSERT INTO verifikasi VALUES ('$ijazah','$foto','$rapor','$kk','Verifikasi Berhasil')");


    echo "<script>alert('Berhasil Di Kirim') </script>";
    echo "<script>location='login.php'</script>";
}


?>